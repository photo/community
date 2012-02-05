<h1>OpenPhoto documentation</h1>

<h2>Getting set up with a site or account</h2>

<p>
  We've made it really easy for you to get set up with an OpenPhoto site.
  Click on any of the <a href="/get-started">get started</a> links or follow one of the installation guides to the left.
</p>

<h2>Download one of the API libraries</h2>

<p>
  You can grab any of our API libraries to make it really easy to hit the ground running.
  <ul>
    <li><a href="https://github.com/openphoto/openphoto-php" rel="external" target="_blank">PHP</a></li>
    <li><a href="https://github.com/openphoto/openphoto-python" rel="external" target="_blank">Python</a></li>
    <li><a href="https://github.com/openphoto/openphoto-ruby" rel="external" target="_blank">Ruby</a></li>
    <li><a href="https://github.com/openphoto/openphoto-java" rel="external" target="_blank">Java</a></li>
  </ul>

  Using the PHP library you can make a command line call to the test API.

  <pre><code>chmod u+x openphoto
./openphoto -vp -h example.com -e /hello.json</code></pre>
  
  You should see something like this.
  <pre><code>==========
Method: get
Host: example.com
Endpoint: /hello.json
==========

{
  "message" : "Hello, world!",
  "code" : 200,
  "result" : {
    "__route__" : "\/hello.json",
    "oauth_consumer_key" : ""
  }
}</code></pre>
</p>

<h2>Get your OAuth tokens</h2>

<p>
  The easiest way to create an app and get the OAuth tokens is to browse to your OpenPhoto site and go to <code>/v1/oauth/flow</code>.
  Follow the prompts until you get a success message.
  Then go to <code>/user/settings</code> and you should see the following parameters:
  <ul>
    <li>Consumer Key</li>
    <li>Consumer Secret</li>
    <li>OAuth Token</li>
    <li>OAuth Secret</li>
  </ul>
</p>

<h2>Use your OAuth tokens to make authenticated calls</h2>

<p>
  First, call the same endpoint as before with an additional parameter <code>auth=true</code>.

  <pre><code>./openphoto -vp example.com -e /hello.json -F 'auth=true'</code></pre>

  You should get an unauthorized 403 code.
  <pre><code>==========
Method: get
Host: current.openphoto.me
Endpoint: /hello.json
==========

{
  "message" : "You do not have sufficient permissions to access this page.",
  "code" : 403,
  "result" : null
}</code></pre>

  Now export your OAuth credentials and run the command again.
  <pre><code>export consumerKey=your_consumer_key
export consumerSecret=your_consumer_secret
export token=your_oauth_token
export tokenSecret=your_oauth_token_secret

./openphoto -vp example.com -e /hello.json -F 'auth=true'</code></pre>

  You should see a successful response.
  <pre><code>==========
Method: get
Host: current.openphoto.me
Endpoint: /hello.json
==========

{
  "message" : "Hello, world!",
  "code" : 200,
  "result" : {
    "__route__" : "\/hello.json",
    "auth" : "true",
    "oauth_consumer_key" : "7f66a2854e521114d3914753a6964c"
  }
}</code></pre>
</p>

<h2>Go build something!</h2>

<p>
  Everything we've built has been on top of this API.
  It's the core of the software and we can't wait to see what you come up with.
</p>

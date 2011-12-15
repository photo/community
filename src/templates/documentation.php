<div class="row" id="docs">
  <div class="span4 toc">
    <h1>Documentation</h1>
    <dl class="documentation-links">
      <dt>Installation</dt>
        <dd><a href="/documentation/guide/InstallationUbuntuApache">Ubuntu and Apache</a></dd>
        <dd><a href="/documentation/guide/InstallationOSXMacports">OSX and Macports</a></dd>
        <dd><a href="/documentation/guide/InstallationUsingOpenPhotoEC2-AMI">AWS EC2 using an AMI</a></dd>
        <dd><a href="/documentation/guide/InstallationSUSE">SUSE and Apache</a></dd>
      <dt>API FAQs</dt>
        <dd><a href="/documentation/faq/Faq">General FAQs</a></dd>
        <dd><a href="/documentation/api/Authentication">Authenticating with OAuth 1.0a</a></dd>
        <dd><a href="/documentation/faq/PhotoGeneration">How photos are generated</a></dd>
        <dd><a href="/documentation/faq/ReturnSizes">How to get specific photo sizes</a></dd>
      <dt>Test APIs</dt>
        <dd><a href="/documentation/api/GetHelloWorld">GET /hello.json</a></dd>
      <dt>Action APIs</dt>
        <dd><a href="/documentation/api/PostActionCreate">POST /action/:id/create.json</a></dd>
        <dd><a href="/documentation/api/PostActionDelete">POST /action/:id/delete.json</a></dd>
      <dt>Photo APIs</dt>
        <dd><a href="/documentation/api/PostPhotoDelete">POST /photo/:id/delete.json</a></dd>
        <dd><a href="/documentation/api/PostPhotoUpdate">POST /photo/:id/update.json</a></dd>
        <dd><a href="/documentation/api/GetPhotos">GET /photos/list.json</a></dd>
        <dd><a href="/documentation/api/GetPhoto">GET /photo/:id/view.json</a></dd>
        <dd><a href="/documentation/api/GetPhotoNextPrevious">GET /photo/:id/nextprevious.json</a></dd>
        <dd><a href="/documentation/api/PostPhotoUpload">POST /photo/upload.json</a></dd>
      <dt>Tag APIs</dt>
        <dd><a href="/documentation/api/GetTags">GET /tags/list.json</a></dd>
        <dd><a href="/documentation/api/PostTagCreate">POST /tag/:id/create.json</a></dd>
        <dd><a href="/documentation/api/PostTagUpdate">GET /tags/:id/update.json</a></dd>
        <!--<dd><a href="">GET /tag/:id/view.json</a></dd>-->
      <dt>Group APIs</dt>
        <dd><a href="/documentation/api/GetGroup">GET /group/:id/view.json</a></dd>
        <dd><a href="/documentation/api/GetGroups">GET /groups/list.json</a></dd>
        <dd><a href="/documentation/api/PostGroupCreate">POST /group/:id/create.json</a></dd>
        <dd><a href="/documentation/api/PostGroupDelete">POST /group/:id/delete.json</a></dd>
        <dd><a href="/documentation/api/PostGroupUpdate">GET /groups/:id/update.json</a></dd>
      <dt>Webhook APIs</dt>
        <dd><a href="/documentation/api/PostWebhookSubscribe">POST /webhook/subscribe</a></dd>
        <dd><a href="/documentation/api/GetWebhook">GET /webhook/:id/view.json</a></dd>
        <dd><a href="/documentation/api/PostWebhookDelete">POST /webhook/:id/delete.json</a></dd>
    </dl>
  </div>
  <div class="span11 doc">
    <ul class="breadcrumb">
      <li><a href="/">Home</a> <span class="raquo divider">&raquo;</span></li>
      <li><a href="/documentation">Documentation</a> <span class="raquo divider">&raquo;</span></li>
      <li class="active"><?php echo $name; ?></li>
    </ul>
    <?php echo $documentation; ?>
  </div>


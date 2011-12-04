var OP = (function(){
  var anchorBinder,
      classMap,
      get,
      eventHandler,
      render,
      store;
  
  anchorBinder = function(ev) {
    var el = ev.target
        url = $(el).attr('href');
    
    if(History.enabled && url.search('#') == -1 && (url.match(/^http/) === null || url.search(document.location.hostname) != -1)) {
      ev.preventDefault();
      get(url);
    }
  };
  eventHandler = function(ev){
    var el = $(ev.target);
    for(i in classMap) {
      var parts = i.split(':'),
          thisClass = parts[1];
      
      if(parts[0] !== ev.type)
        continue;

      if(classMap.hasOwnProperty(i)) {
        if(el.hasClass(thisClass)) {
          classMap[i](ev, el);
        }
      }
    }
  };
  get = function(url) {
    var urlJson = url+'.json';
    $.get(urlJson, store, 'json');
  };
  render = function(result) {
    $('body').removeClass().addClass(result.bodyClass);
    $('#content').fadeOut('fast', function(){ $('#content').html(result.content); $('#content').fadeIn('fast'); });
  };
  store = function(response) {
    var result = response.result;
    History.pushState(result,'',url);
  };

  return {
    handler: {
      headlineCarousel: function(ev, el) {
        ev.preventDefault();
        var li = el.parent(),
            ul = li.parent(),
            div = ul.parent().parent(),
            effects = {first:'hide',second:'hide',third:'hide'};

        if(li.hasClass('first')) {
          effects.first = 'show';
        } else if(li.hasClass('second')) {
          effects.second = 'show';
        } else if(li.hasClass('third')) {
          effects.third = 'show';
        }

        for(i in effects) {
          if(effects[i] == 'hide') {
            div.removeClass(i);
            div.find('.message>div.'+i).fadeOut('fast');
          } else {
            div.addClass(i);
            div.find('.message>div.'+i).fadeIn('fast');
          }
        }
      }
    },
    init: function(clsMap) {
      classMap = clsMap;
      $(document).click(eventHandler);
      $(document).mouseover(eventHandler);
      $('a').live('click', anchorBinder);
      History.Adapter.bind(window,'statechange',function(){
        var State = History.getState();
        render(State.data);
      });
    }
  };
})();

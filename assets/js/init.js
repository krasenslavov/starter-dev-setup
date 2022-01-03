var UUID = UUID || {};
var $ = jQuery || {};

UUID.pluginURL = 'https://example.com/wp-content/themes/uuid/'; 

UUID.loadModules = function ()
{
  if (this.pluginURL) {
    var jsURL = this.pluginURL + 'assets/js/';
    this.require(jsURL + 'utils.mjs');
    this.require(jsURL + 'module1.mjs');
    this.require(jsURL + 'module2.mjs');
    this.require(jsURL + 'module3.mjs');
  } else {
    throw new Error('Base URL is not defined!');
  }
};

UUID.require = function (script)
{
  $.ajax({
    url: script,
    dataType: 'script',
    async: true,
    success: function () {},
    error: function () {
      throw new Error('Could not load script ' + script);
    }
  });
};

(function ($, undefined) {  
  UUID.loadModules();
})(jQuery);
App.Collections.Artists = Backbone.Collection.extend({
  model: App.Models.Artist,
  url: '/artists'
});

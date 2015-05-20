App.Models.Artist = Backbone.Model.extend({
  validate: function(attrs) {
    if(!attrs.artist_name) {
      return 'Artist name is required';
    }
  }
});

App.Models.Artist = Backbone.Model.extend({
  default: {
    'id':'',
    'artist_name': '',
    'created_at': '',
    'updated_at': ''
  },
  
  validate: function(attrs) {
    if(!attrs.artist_name) {
      return 'Artist name is required';
    }
  }
});

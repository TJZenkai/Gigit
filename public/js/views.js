App.Views.App = Backbone.View.extend({
  initialize: function() {
    var addArtistView = new App.Views.AddArtist({
      collection: App.artists
    });

    var allArtistsView = new App.Views.Artists({
      collection: App.artists
    }).render();

    $('#allArtists').append(allArtistsView.el);
  }
});


App.Views.AddArtist = Backbone.View.extend({
  el: '#addartist-nav',

  events: {
    'submit': 'addArtist'
  },

  addArtist: function(e) {
    e.preventDefault();

    var newArtist = this.collection.create({
      artist_name: this.$('#artist-name').val()
    }, {wait: true });

    this.clearForm();
  },

  clearForm: function() {
    this.$('#artist-name').val('');
  }
});


App.Views.Artists = Backbone.View.extend({
  tagName: 'tbody',

  initialize: function() {
    this.collection.on('sync', this.addOne, this);
  },

  render: function() {
    this.collection.each( this.addOne, this);
    console.log(this.el);
    return this;
  },

  addOne: function(artist) {
    var artistView = new App.Views.Artist({ model: artist });
    this.$el.append(artistView.render().el);
  }
});

App.Views.Artist = Backbone.View.extend({
  tagName: 'tr',

  template: template('allArtistsTemplate'),

  initialize: function() {
    this.model.on('destroy', this.unrender, this);
  },

  events: {
    'click a.delete': 'deleteArtist'
  },

  deleteArtist: function() {
    this.model.destroy();
  },

  render: function() {
    this.$el.html(this.template(this.model.toJSON() ));
    return this;
  },

  unrender: function() {
    this.remove();
  }
});

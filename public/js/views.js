App.Views.App = Backbone.View.extend({
  initialize: function() {

    vent.on('artist:edit', this.editArtist, this);

    var addArtistView = new App.Views.AddArtist({
      collection: App.artists
    });

    var allArtistsView = new App.Views.Artists({
      collection: App.artists
    }).render();

    $('#allArtists').append(allArtistsView.el);
  },

  editArtist: function(artist) {
    var editArtistView = new App.Views.EditArtist({ model: artist});
    $('#editArtist').html(editArtistView.el);
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


App.Views.EditArtist = Backbone.View.extend({
  template: template('editArtistTemplate'),

  initialize: function() {
    this.render();
  },

  events: {
    'submit form': 'submit',
    'click button.cancel': 'cancel'
  },

  submit: function(e) {
    e.preventDefault();

    this.model.save({
      artist_name: $('#editartist-name').val()
    });

    this.remove();
  },

  cancel: function() {
    this.remove();
  },

  render: function() {
    this.$el.html(this.template(this.model.toJSON() ));
    return this;
  }
});


App.Views.Artists = Backbone.View.extend({
  tagName: 'ul',

  initialize: function() {
    this.collection.on('add', this.addOne, this);
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
  tagName: 'li',

  template: template('allArtistsTemplate'),

  initialize: function() {
    this.model.on('destroy', this.unrender, this);
    this.model.on('change', this.render, this);
  },

  events: {
    'click a.delete': 'deleteArtist',
    'click a.edit': 'editArtist'
  },

  deleteArtist: function() {
    this.model.destroy();
  },

  editArtist: function() {
    vent.trigger('artist:edit', this.model);
  },

  render: function() {
    this.$el.html(this.template(this.model.toJSON() ));
    return this;
  },

  unrender: function() {
    this.remove();
  }
});

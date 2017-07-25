# Load Decoy js from the public/assets directory where it was installed by
# `php artisan vendor:publish`
decoy = require './index'

# Make a single stylesheet with Decoy and extended styles
require './index.css'
# require './start.styl'

# Customize wysiwyg options
decoy.wysiwyg.config.allowUploads()
decoy.wysiwyg.config.merge({
  plugins: ['fontcolor'],
  buttons: ['formatting', 'bold', 'italic', 'link', 'file', 'image', 'horizontalrule', 'orderedlist', 'unorderedlist', 'html'],
  formatting: ['p', 'h2', 'h3', 'blockquote'],
  formattingAdd: [
    {
      tag: 'p',
      title: 'Full Width Image',
      class: 'full-width'
    },
    {
      tag: 'h3',
      title: 'Header 2 subtitle',
      class: 'subtitle'
    }
  ],
})

# Start up decoy
decoy.init();

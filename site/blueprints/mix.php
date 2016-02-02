<?php if(!defined('KIRBY')) exit ?>

title: Mix
pages: true
files: true
fields:
  title:
    label: Author
    type:  text
    width: 1/2
  author_website:
    label: Author Website
    type: url
    width: 1/2
  date:
    label: Date
    type: date
    format: MM/DD/YYYY
    width: 1/2
  order:
    label: Sort Order
    type: select
    width: 1/2
    options:
      - 1
      - 2
      - 3
      - 4
  tracklist:
    label: Track List
    type:  textarea
  text:
    label: Text
    type:  textarea
  herobackgroundcolor:
    label: Hero Background Color
    type: color
  mixcloud:
    label: Mixcloud URL
    type: url
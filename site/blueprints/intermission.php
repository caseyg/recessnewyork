<?php if(!defined('KIRBY')) exit ?>

title: Intermission
deletable: false
pages:
  template: mix
  num:
    mode: date
files: false
fields:
  title:
    label: Title
    type:  text
  subtitle:
    label: Subtitle
    type:  text
  herobackgroundcolor:
  	label: Hero Background Color
  	type: color
  carousel:
    label: Carousel
    type: structure
    entry: >
      {{page}}<br />
    fields:
      page:
        label: Page
        type: select
        options: children
  text:
    label: Text
    type:  textarea
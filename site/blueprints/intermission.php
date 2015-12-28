<?php if(!defined('KIRBY')) exit ?>

title: Intermission
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
      image:
        label: Display Image
        type: checkbox
        default: 1
  text:
    label: Text
    type:  textarea
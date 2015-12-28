<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: true
files: true
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
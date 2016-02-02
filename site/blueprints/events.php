<?php if(!defined('KIRBY')) exit ?>

title: Events
deletable: false
pages:
  template: event
  num:
    mode: date
files: false
fields:
  title:
    label: Title
    type:  text
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
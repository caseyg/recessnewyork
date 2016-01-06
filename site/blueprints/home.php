<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
files: true
  sortable: true
  fields:
    slideColor:
      label: Slide Color
      type: color
      width: 1/2
    slideOverlay:
      label: Overlay
      text: Overlay color on image?
      type: checkbox
      width: 1/2
    slideSubtitle:
      label: Slide Subtitle
      type:  text
    slideTitle:
      label: Slide Title
      type:  text
    slideLink:
      label: Slide Link URL
      type: url
fields:
  title:
    label: Title
    type:  text
  carousel:
    label: Carousel
    type: structure
    modalsize: large
    style: table
    fields:
      slidePage:
        label: Page Slide
        type: select
        options: pages
      slideCustom:
        label: Custom Slide
        type: selector
        mode: single
        types:
          - image

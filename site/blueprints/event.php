<?php if(!defined('KIRBY')) exit ?>

title: Event
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
    width: 1
  date:
    label: Date
    type: date
    format: MM/DD/YYYY
    width: 1/2
  time:
    label: Time
    type: text
    width: 1/2
  sport:
    label: Sport
    type:  text
    width: 1/2
  season:
    label: Season
    type: select
    width: 1/2
    options:
      spring: "Spring"
      summer: "Summer"
      fall: "Fall"
      winter: "Winter"
  champion:
    label: Champion
    type: text
  text:
    label: Text
    type:  textarea
  tickets:
    label: Ticket Purchase URL
    type: url
  herobackgroundcolor:
    label: Hero Background Color
    type: color
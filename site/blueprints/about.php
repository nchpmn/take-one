<?php if(!defined('KIRBY')) exit ?>

title: About
pages: false
files: true
fields:
  title:
    label: Title
    type: text
  text:
    label: Text
    type: textarea
  photo:
    label: Featured Photo
    type: selector
    mode: single
// Copyright (c) 2024 Mr. Adam Batiuk All rights reserved
//
// Created by: Adam Batiuk
// Created on: Mar 2024
// This file contains the JS functions for index.html

  // Define the lengths of the three sides of a triangle
  let sidea = document.getElementById('side-a');
  let sideb = document.getElementById('side-b');
  let sidec = document.getElementById('side-c');

  // Calculate the semi-perimeter of the triangle
  let s = (sidea + sideb + sidec) / 2;

  // Use Heron's formula to calculate the area of the triangle
  let area = Math.sqrt(s * ((s - sidea) * (s - sideb) * (s - sidec)));

function myButtonClicked() {
  alert(area)
}

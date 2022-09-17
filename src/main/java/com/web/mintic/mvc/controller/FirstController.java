package com.web.mintic.mvc.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.servlet.ModelAndView;

@Controller
@RequestMapping("")
public class FirstController {
  
  @GetMapping("/show")
  public ModelAndView show() {

    return new ModelAndView("hola");
  }
}

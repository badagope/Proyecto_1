package com.web.mintic.mvc.controller;

import java.util.HashMap;

import org.springframework.http.HttpStatus;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.servlet.ModelAndView;

import com.web.mintic.dto.LoginForm;
import com.web.mintic.dto.UserDto;

@Controller
@RequestMapping("")
public class LoginController {
  
  @GetMapping("/login")
  public ModelAndView showLogin() {

    var params = new HashMap<String, Object>();
    LoginForm form = new LoginForm();
    form.setUser(new UserDto());
    params.put("form", form);
    return new ModelAndView("login", params);
  }

  @PostMapping("/login")
  public ModelAndView postLogin(LoginForm form) {
    UserDto user = form.getUser();
    String email = user.getEmail();
    String pwd = user.getPassword();
    System.out.println("Logged in");
    System.out.println(email);
    System.out.println(pwd);
    return new ModelAndView("redirect:/login");
  }
}

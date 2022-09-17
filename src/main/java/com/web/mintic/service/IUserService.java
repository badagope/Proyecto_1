package com.web.mintic.service;

import javax.validation.Valid;

import com.web.mintic.dto.UserDto;

public interface IUserService {
  public UserDto create(@Valid UserDto user);
  public boolean delete(UserDto user);
}

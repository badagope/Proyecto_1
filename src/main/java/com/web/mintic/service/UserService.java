package com.web.mintic.service;

import org.modelmapper.ModelMapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.validation.annotation.Validated;

import com.web.mintic.dto.UserDto;
import com.web.mintic.model.User;
import com.web.mintic.repository.IUserJpaRepository;

@Service
@Validated
public class UserService implements IUserService {

  @Autowired
  private IUserJpaRepository userRepo;
  
  @Autowired
  private ModelMapper modelMapper;

  @Override
  public UserDto create(UserDto user) {
    User userEntity = modelMapper.map(user, User.class);
    userRepo.save(userEntity);
    return modelMapper.map(userEntity, UserDto.class);
  }

  @Override
  public boolean delete(UserDto user) {
    User userEntity = modelMapper.map(user, User.class);
    try {
      userRepo.delete(userEntity);
      return true;
    } catch (Exception e) {
      return false;
    }
  }
  
}

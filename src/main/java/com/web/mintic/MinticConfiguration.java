package com.web.mintic;

import org.modelmapper.ModelMapper;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;

@Configuration
public class MinticConfiguration {
  
  @Bean
  public ModelMapper modelMapper(){
    return new ModelMapper();
  }
}

package com.web.mintic.service;

import static org.junit.jupiter.api.Assertions.assertEquals;
import static org.junit.jupiter.api.Assertions.assertNotNull;
import static org.junit.jupiter.api.Assertions.assertThrows;

import javax.validation.ConstraintViolationException;

import org.junit.jupiter.api.Test;
import org.junit.jupiter.api.extension.ExtendWith;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.test.context.SpringBootTest;
import org.springframework.test.context.junit.jupiter.SpringExtension;

import com.web.mintic.dto.UserDto;

@ExtendWith(SpringExtension.class)
@SpringBootTest
public class UserConstraintsValidationExceptionTest {

  @Autowired
  private UserService userService;
  
  @Test
  public void constraintsValidationExceptionTest() {

    assertThrows(ConstraintViolationException.class, ()-> {
      userService.create(new UserDto());
    });
    
    assertThrows(ConstraintViolationException.class, ()-> {
      userService.create(new UserDto("Lu", "Hernandez", "email@email.com", "31243545", "123456"));
    });

  }

  @Test
  public void createUserOk() {
    UserDto userDto = userService.create(new UserDto("Lusho", "Hernandez", "lusho@luis.com", "123456", "pass"));
    
    assertNotNull(userDto);
    assertEquals("Lusho", userDto.getName());
    assertNotNull(userDto.getId());

    boolean deleted = userService.delete(userDto);
    assertEquals(true, deleted);
  }
}

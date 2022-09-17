package com.web.mintic;

import static org.junit.jupiter.api.Assertions.assertEquals;

import org.junit.jupiter.api.Test;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.test.autoconfigure.jdbc.AutoConfigureTestDatabase;
import org.springframework.boot.test.autoconfigure.jdbc.AutoConfigureTestDatabase.Replace;
import org.springframework.boot.test.autoconfigure.orm.jpa.DataJpaTest;

import com.web.mintic.model.User;
import com.web.mintic.repository.IUserJpaRepository;

@DataJpaTest
@AutoConfigureTestDatabase(replace = Replace.NONE)
public class UserJpaRepositoryTest {
  
  @Autowired
  private IUserJpaRepository repo;

  @Test
  public void saveUser() {
    User Luis = new User("Luis", "Hernandez", "luis@luis.com", "123456", "pass");
    User Lusho = new User("Lusho", "Hernandez", "lusho@luis.com", "123456", "pass");

    repo.save(Luis);
    repo.save(Lusho);

    repo.flush();

    assertEquals(2, repo.findAll().size());
  }
}

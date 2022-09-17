package com.web.mintic.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.web.mintic.model.User;

@Repository
public interface IUserJpaRepository extends JpaRepository<User, Long> {
  User findByEmail(String email);
  User findByName(String name);
}

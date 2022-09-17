package com.web.mintic.model; 

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;

import lombok.AllArgsConstructor;
import lombok.EqualsAndHashCode;
import lombok.Getter;
import lombok.Setter;
import lombok.ToString;

@Getter @Setter @ToString
@EqualsAndHashCode(onlyExplicitlyIncluded = true)
@AllArgsConstructor
@Entity
public class User {
  
  @EqualsAndHashCode.Include
  @Id
  @GeneratedValue(strategy = GenerationType.AUTO)
  private Long id;

  @Column(length = 50, nullable = false)
  private String name;

  @Column(length = 50, nullable = false)
  private String lastname;

  @Column(length = 50, nullable = false, unique = true)
  private String email;

  @Column(length = 50, nullable = false)
  private String phone;

  @Column(length = 50, nullable = false)
  private String password;

  @Column()
  private Boolean isAdmin = false;

  public User() {
  }

  public User(String name, String lastname, String email, String phone, String password) {
    this.name = name;
    this.lastname = lastname;
    this.email = email;
    this.phone = phone;
    this.password = password;
    this.isAdmin = false;
  }

}

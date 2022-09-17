package com.web.mintic.dto;

import javax.validation.constraints.NotBlank;
import javax.validation.constraints.Size;

import lombok.EqualsAndHashCode;
import lombok.Getter;
import lombok.NoArgsConstructor;
import lombok.NonNull;
import lombok.RequiredArgsConstructor;
import lombok.Setter;
import lombok.ToString;

@Getter @Setter @ToString
@EqualsAndHashCode(onlyExplicitlyIncluded = true)
@RequiredArgsConstructor
@NoArgsConstructor
public class UserDto {
  @EqualsAndHashCode.Include
  private Long id;

  @NotBlank
  @NonNull
  @Size(min = 3, max = 50)
  private String name;

  @NotBlank
  @NonNull
  @Size(min = 3, max = 50)
  private String lastname;

  @NotBlank
  @NonNull
  @Size(min = 3, max = 50)
  private String email;

  @NotBlank
  @NonNull
  @Size(min = 3, max = 50)
  private String phone;

  @NotBlank
  @NonNull
  @Size(min = 3, max = 50)
  private String password;

  private Boolean isAdmin = false;

}
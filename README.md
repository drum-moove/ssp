# set up

```
$ docker-compose up
```

# url

- idp
  - https://localhost/simplesamlidp/index.php
- sp
  - https://localhost/simplesamlsp/index.php

# auth
- admin (idp/sp)
  - admin / pass

- https://localhost/simplesamlsp/module.php/core/authenticate.php
  - default-sp
    - student/studentpass
    - employee/employeepass

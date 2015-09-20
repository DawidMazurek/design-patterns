Wzorzec fasada wprowadza dodatkową warstwę pośredniczącą w celu minimalizacji komunikacji pomiędzy podsystemami.
Zastępuje on bezpośrednie odwołania do elementów składowych, spójnym interfejsem, który jest zbiorem interfejsów danego podsystemu.

![fasada](https://cloud.githubusercontent.com/assets/8313050/9982684/9bacc364-5fe4-11e5-919c-4c8380bf7f0e.jpg)

Fasada ukrywa przed programistą złożoność operacji. Nie musi on wykonywać skomplikowanej logiki w danym miejscu, ale również
nie jest on w pełni odizolowany od wnętrza ssytemu. Ma dostęp zarówno do zewnętrzego interfejsu fasady, jak i do elementów podsystemu.

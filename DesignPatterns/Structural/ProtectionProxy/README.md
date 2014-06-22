#Protection Proxy

##Purpose

*  A Protection Proxy comes into play when you want to transparently limit access to an API through a set of rules (ACL/limits/custom logic).
  It actually is a decorator to the proxied RealSubject.

###Pros

* Limiting access to an API does not require changes in the API


###Cons
* CModifies proxied object behavior

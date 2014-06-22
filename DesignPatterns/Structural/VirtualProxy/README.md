#Virtual Proxy

##Purpose

* Lazy loading



### Pros
* Abstracts initialization logic away
* Improved memory/performance impact
* Low overhead
* Easy to implement


### Cons
* Not optimal for data that is always loaded
* Lazy loading means lazy failing
* Actually, not the same object as RealSubject (different identity)


###Ghost Object - VirtualProxy class

An object whose properties are the same of the proxied object, but null.
Accessing any method causes loading of the properties.

Useful when the identity of the object has to be preserved

Doctrine Proxies are generated this way.


####Ghost Object pros
* Same identity as RealSubject
* Abstracts initialization logic away
* Improved memory/performance impact
* Low overhead

####Ghost Object cons
* Harder to implement
* May require reflection to access parent class's properties
* Not optimal for data that is always loaded
* Lazy loading means lazy failing

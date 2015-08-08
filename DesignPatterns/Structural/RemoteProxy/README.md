#Remote Proxy

##Purpose

* Treat object as a remote node, can be accessed by api, dont have to be part of local system

###Pros

* Share objects across multiple systems
* No local memory usage
* Can act as an adapter for a completely different remote object

###Cons
* Complex setup
* Fails on adapter failure
* As slow as the protocol


RealSubject <------- AdapterServer -------- AdapterClient <------- SubjectProxy

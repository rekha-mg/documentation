### Applications are of three types:

1. Stand alone application
2. Client server application
3. Web based application
___

##### 1. Stand alone application:

software installed in one computer and used by only one person.

For ex – Installing s/w of a Calculator, Adobe Photoshop, MS Office, AutoCad

##### Advantages:
* Faster in access.
* Secured from Data hacking and virus.
##### Disadvantages:

* Single user access at a time.

##### Installation is required.
* End user system resources utilized.
* No data sharing
* Maintenance is tough with respect to both user and company
##### Architecture:

* In the stand alone application architecture there is no question of any servers and entire application is installed a he end user machine.
* This is about Stand alone application.

##### Client Server Application 
* In Client Server application, unlike Standalone Application, part of application is installed on to the client system and the remaining part is installed on to the server machine.
Both Client and server interact with the help of network/internet.

##### Advantages:

* Easy to access and faster in access if the bandwidth is more
* Data security from data hacking and virus
* Data sharing is possible
* Maintenance is not so tough
* Multiple users can access the application.

##### Disadvantages:

* Installation is still required at client’s place
* End users resources are utilized low
* If the server goes down no one can access the application.

##### Web Application

* The UI is rendered on a client machine, using a specialized client (a.k.a. web browser)
* The UI capabilities on the client machine are limited to what the web browser (including plugins) supports. The programmer generally has no ability to implement arbitrary functionality on the client, but rather must work within the capabilities supported by the client.
* Business logic and data storage are not on the client machine (generally speaking, there can be limited exceptions). Rather, one or more servers take those architectural roles.
* Communication between the client and server occurs using a standardized network communication protocol (HTTP).


##### Stand Alone Application

* There are a vast number of different architectures for stand-alone applications. Some can be quite similar to a web hosted application; others are quite different.
* The programmer has full control (within the capabilities of the operating system and with support of a broad selection of UI frameworks) over the user interface.
* The business logic layer and data layer may reside on the same machine or on a remote server.
* If one or more remote servers are involved in the solution, many different remote communication protocols can be selected from. There's no requirement to use HTTP over TCP/IP (and in fact, more efficient protocols are often selected).
* 
##### SOAP
 it is an acronym for Simple Object Access Protocol. It is an XML-based messaging protocol for exchanging information among computers. SOAP is an application of the XML specification.

##### Points to Note
* SOAP is a communication protocol designed to communicate via Internet.

* SOAP can extend HTTP for XML messaging.

* SOAP provides data transport for Web services.

* SOAP can exchange complete documents or call a remote procedure.

* SOAP can be used for broadcasting a message.

* SOAP is platform- and language-independent.

* SOAP is the XML way of defining what information is sent and how.

* SOAP enables client applications to easily connect to remote services and invoke remote methods.

##### What is REST
* REST is acronym for REpresentational State Transfer. It is architectural style for distributed hypermedia systems and was first presented by Roy Fielding in 2000 in his famous dissertation.

* Like any other architectural style, REST also does have it’s own 6 guiding constraints which must be satisfied if an interface needs to be referred as RESTful. These principles are listed below.

##### Guiding Principles of REST
* Client–server – By separating the user interface concerns from the data storage concerns, we improve the portability of the user interface across multiple platforms and improve scalability by simplifying the server components.
* Stateless – Each request from client to server must contain all of the information necessary to understand the request, and cannot take advantage of any stored context on the server. Session state is therefore kept entirely on the client.
* Cacheable – Cache constraints require that the data within a response to a request be implicitly or explicitly labeled as cacheable or non-cacheable. If a response is cacheable, then a client cache is given the right to reuse that response data for later, equivalent requests.
* Uniform interface – By applying the software engineering principle of generality to the component interface, the overall system architecture is simplified and the visibility of interactions is improved. In order to obtain a uniform interface, multiple architectural constraints are needed to guide the behavior of components. REST is defined by four interface constraints: identification of resources; manipulation of resources through representations; self-descriptive messages; and, hypermedia as the engine of application state.
* Layered system – The layered system style allows an architecture to be composed of hierarchical layers by constraining component behavior such that each component cannot “see” beyond the immediate layer with which they are interacting.
* Code on demand (optional) – REST allows client functionality to be extended by downloading and executing code in the form of applets or scripts. This simplifies clients by reducing the number of features required to be pre-implemented.
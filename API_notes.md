#### What is an API? Application programming interfaces explained
* Application programming interfaces hide complexity from developers, extend systems to partners, organize code, and make components reusable.
* API stands for application programming interface, a concept that applies everywhere from command-line tools to enterprise Java code to Ruby on Rails web apps. An API is a way to programmatically interact with a separate software component or resource.
#### API as abstraction layer
* When it comes to software, APIs are literally everywhere. APIs go hand in hand with one of the most fundamental concepts in computer science: abstraction.
* Abstraction is just a way of organizing the complexity of a system so that complicated actions can be handled in a simple way. 
* Think of this abstraction like those Amazon Dash Buttons, the battery operated, push-button circuit boards you can use to order staples from Amazon. This is what they look like:
#### Public APIs and API integration
* APIs are a longstanding concept in computer programming, and they have been part of developers’ toolsets for years. 
* Traditionally, APIs were used to connect code components running on the same machine. With the rise of ubiquitous networking, more and more public APIs, sometimes called open APIs, have become available. 
* Public APIs are outward facing and accessible over the Internet, allowing you to write code that interacts with other vendors’ code online; this process is known as API integration.
#### Web services and APIs
* You might recall the term web services from the early ’00s and think that the idea of an open API sounds pretty similar. 
* In fact, a web service is a specific kind of open API, one that meets a fairly rigid set of specifications, including that they be specified in Web Services Description Language (WSDL), an XML variant.

* Web services were meant to be used as part of a service-oriented architecture (SOA). As the Nordic APIs blog explains, that gave web services something of a bad name, as SOAs never quite lived up to their potential. 
* Advances in the techniques used for service-to-service communications—notably lighter, more flexible REST—have also left web services somewhat behind in the world of public APIs.

#### REST APIs
* Web services were originally designed to communicate using SOAP (Simple Object Access Protocol), a messaging protocol that sends XML documents over HTTP. Today, however, most web-based APIs use REST—Representational State Transfer—as an architectural style.

* REST was formally introduced by Roy Fielding in his doctoral dissertation in 2000. It’s a set of architectural components, design principles, and interactions used for building distributed systems that involve media of any kind (text, video, etc.). At its core, REST is a style of building systems that allows for flexible communication and display of information across the web while providing structure necessary to easily build general purpose components.

* In a REST API, a resource could be pretty much anything, but examples include a user, a list of tweets, and the current results of a search for tweets.
* Each of these resources is addressable at a resource identifier, which in the case of web-based REST APIs is usually a URL, such as https://api.twitter.com/1.1/users/show?screen_name=twitterdev.
* When an application requests a resource using the identifier, the API delivers the current representation of that resource to the application in a format that the application can consume, such as a JPEG image, HTML page, or JSON.


#### API examples
* There are plenty of public APIs out there for you to interact with, many from industry behemoths. The ability to access some platform company’s code programmatically via an API is what makes them a platform, in essence. Some prominent API examples include:

* Google APIs, which allow you to connect your code to the whole range of Google services, from Maps to Translate. APIs are so important to Google that they acquired Apigee, a leading API management platform.
* Facebook APIs, which allow you to programmatically access Facebook’s social graph and marketing tools. (The company has been restricting just what user data you can access via these APIs in the fallout from Cambridge Analytica and other scandals.)

#### Laravel API Tutorial
* Laravel is a PHP framework developed with PHP developer productivity in mind. Written and maintained by Taylor Otwell, the framework is very opinionated and strives to save developer time by favoring convention over configuration.
* The framework also aims to evolve with the web and has already incorporated several new features and ideas in the web development world—such as job queues, API authentication out of the box, real-time communication, and much more.


### RESTful APIs
* First, we need to understand what exactly is considered a RESTful API. REST stands for REpresentational State Transfer and is an architectural style for network communication between applications, which relies on a stateless protocol (usually HTTP) for interaction.

### HTTP Verbs Represent Actions
In RESTful APIs, we use the HTTP verbs as actions, and the endpoints are the resources acted upon. We’ll be using the HTTP verbs for their semantic meaning:

* GET: retrieve resources
* POST: create resources
* PUT: update resources
* DELETE: delete resources

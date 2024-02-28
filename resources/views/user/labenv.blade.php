<!DOCTYPE html>
<html>
<head>
	<title>Lab Environment</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="icon" href="assets/images/lg.png">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
</head>

<body>
	<a href="/"><h1>Lab Environment</h1></a>
<section id="definition">
    <h2>What is a Network?</h2>
    <p>A network refers to two or more connected computers that
        can share resources such as data, a printer, an Internet
        connection, applications, or a combination of these
        resources.</p>
        <div style="text-align: center;">
            <img src="assets/images/networking.jpg" alt="" width="400">
          </div>
</section>
<section id="definition">
    <h2><center>Types of Networks</center></h2>
    <h3>Local Area Network (LAN)</h3> 
    <p>A local area network (LAN) is a collection of devices connected together in one physical location, such as a building, office, or home. A LAN can be small or large, ranging from a home network with one user to an enterprise network with thousands of users and devices in an office or school.</p>
    <div style="text-align: center;">
        <img src="assets/images/lan.png" alt="" width="400">
      </div>
    <h3>Metropolitan Area Network (MAN)</h3>
    <p>A metropolitan area network (MAN) is a computer network that is larger than a single building local area network (LAN) but is located in a single geographic area that is smaller than a wide area network (WAN). Generally, it is several LANs interconnected by dedicated backbone connections.</p>
    <div style="text-align: center;">
        <img src="assets/images/man.png" alt="" width="400">
      </div>
    <h3>Wide Area Network (WAN)</h3>
    <p>A wide-area network (WAN) is the technology that connects your offices, data centers, cloud applications, and cloud storage together. It is called a wide-area network because it spans beyond a single building or large campus to include multiple locations spread across a specific geographic area, or even the world.</p>
    <div style="text-align: center;">
        <img src="assets/images/wan.jpg" alt="" width="400">
      </div>
</section>

<section id="definition">
    <h2><center>Network Topologies</center></h2>
    <h3>Bus Topology</h3> 
    <p>Bus topology is a type of network topology in which all devices are connected to a single cable called a "bus." This cable serves as a shared communication medium, allowing all devices on the network to receive the same signal simultaneously.</p>
    <div style="text-align: center;">
        <img src="assets/images/bus.png" alt="" width="400">
      </div>
    <h3>Star Topology</h3>
    <p>Star topology is a network topology in which each network component is physically connected to a central node such as a router, hub or switch. In a star topology, the central hub acts like a server and the connecting nodes act like clients.</p>
    <div style="text-align: center;">
        <img src="assets/images/star.png" alt="" width="400">
      </div>
</section>
<section id="definition">
<h2><center>The OSI Model</center></h2>
    <h3>The Open Systems Interconnection (OSI) model </h3> 
    <p>Describes seven layers that computer systems use to communicate over a network. It was the first standard model for network communications, adopted by all major computer and telecommunication companies in the early 1980s.</p>
    <div style="text-align: center;">
        <img src="assets/images/osi.png" alt="" width="400">
      </div>
</section>
<section id="definition">
        <h3>Application Layers (7th, 6th, 5th Layers):</h3> 
        <li>Network Processes to Applications</li>
        <li>Data Representation</li>
        <li>InterHost Communication</li>
        <div style="text-align: center;">
            <img src="assets/images/osi.png" alt="" width="400">
          </div>
    </section>
    <section id="definition">
        <h3>End To End Connections (4th Layer):</h3> 
        <li>Handles transportation issues between hosts</li>
        <li>Ensures data transport reliability</li>
        <li>Establishes, maintains and terminates virtual circuits</li>
        <li>Provides reliability through fault detection and recovery</li>
        <li>Information flow control</li>
        <div style="text-align: center;">
            <img src="assets/images/osi.png" alt="" width="400">
          </div>
    </section>
    <section id="definition">
        <h3>Data Delivery (3rd Layer):</h3> 
        <li>Provides connectivity and path selection between two host systems</li>
        <li>Routes data packets</li>
        <li>Selects best path to deliver data</li>
        <li>The Network layer prioritizes data known as Quality of Service (QoS)</li>
        <div style="text-align: center;">
            <img src="assets/images/osi.png" alt="" width="400">
          </div>
    </section>      
    <section id="definition">
        <h3>Access to Media (2nd Layer):</h3> 
        <li>Defines how data is formatted for transmission and how access to the network is controlled</li>
        <div style="text-align: center;">
            <img src="assets/images/osi.png" alt="" width="400">
          </div>
    </section> 
    <section id="definition">
        <h3>Binary Transmission (1st Layer):</h3> 
        <li>Defines the electrical, mechanical, procedural, and functional specifications for activating, maintaining, and deactivating the physical link</li>
        <div style="text-align: center;">
            <img src="assets/images/osi.png" alt="" width="400">
          </div>
    </section>   
    <section id="definition">
        <h3>Hub or Repeater</h3> 
    <p>A hub (concentrator) is a device that repeats the signals it
        receives on one port to all other ports. It is a central
        connection point for several network devices.</p>
    <div style="text-align: center;">
        <img src="assets/images/hub.jpg" alt="" width="400">
      </div>
    </section>
    <section id="definition">
        <h3>Network Interface Card</h3> 
    <p>A network interface controller is a computer hardware component that connects a computer to a computer network. Early network interface controllers were commonly implemented on expansion cards that plugged into a computer bus.</p>
    <div style="text-align: center;">
        <img src="assets/images/nic.jpg" alt="" width="400">
      </div>
    </section>
    <section id="definition">
        <h3>MAC Address</h3> 
    <p>A MAC address (media access control address) is a 12-digit hexadecimal number assigned to each device connected to the network. Primarily specified as a unique identifier during device manufacturing, the MAC address is often found on a device's network interface card (NIC). A MAC address is required when trying to locate a device or when performing diagnostics on a network device.</p>
    <div style="text-align: center;">
        <img src="assets/images/mac.jpeg" alt="" width="400">
      </div>
    </section>
    <section id="definition">
        <h3>IP Address</h3> 
    <p>An IP address is a unique address that identifies a device on the internet or a local network. IP stands for "Internet Protocol," which is the set of rules governing the format of data sent via the internet or local network.</p>
    <div style="text-align: center;">
        <img src="assets/images/ip.png" alt="" width="400">
      </div>
    </section>
    <section id="definition">
        <h3>Data Link Devices</h3> 
    <p>The Data Link layer is manipulated by two devices: bridges
        and switches. These are more complex and more expensive
        than their Physical layer counterparts, but they do have
        advantages.</p>
    <div style="text-align: center;">
        <img src="assets/images/link.webp" alt="" width="400">
      </div>
    </section>
    <section id="definition">
        <h3>Switch</h3> 
    <p>When a switch receives data the switch examines the data
        link header for the MAC address of the destination station
        and forwards it to the correct port. This opens a path
        between ports that can use the full bandwidth of the
        topology.</p>
    <div style="text-align: center;">
        <img src="assets/images/switch.png" alt="" width="400">
      </div>
    </section>
    <section id="definition">
        <h3>Routers</h3> 
    <p>Routers facilitate communication within this internet work. It
        decides how to send packets within the network so that they
        arrive at their destination.</p>
    <div style="text-align: center;">
        <img src="assets/images/router.webp" alt="" width="400">
      </div>
    </section>
    <section id="definition">
        <h3>Gateway</h3> 
    <p>A gateway is a combination of hardware and software that
        connects dissimilar network environments. It performs
        translations at multiple layers of the open system
        interconnection (OSI) model.</p>
    <div style="text-align: center;">
        <img src="assets/images/gateway.jpg" alt="" width="400">
      </div>
    </section>
    <section id="definition">
        <h3>Firewall</h3> 
    <p>A firewall is a system or group of systems that manages
        access between two or more networks.</p>
    <div style="text-align: center;">
        <img src="assets/images/firewall.jpg" alt="" width="400">
      </div>
    </section>

    <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p><i class="fa fa-copyright"></i> DevLearn Hub 2024
              </p>
            </div>
          </div>
        </div>
      </footer>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
    }
       
    h1 {
        text-align: center;
        padding: 20px;
        background-color: #152036;
        color: #fff;
        margin-top: 0;
    }

    p{
        font-size: 20px;
    }
       
    section {
        padding: 20px;
        margin: 20px;
        background-color: #fff;
        border: 1px solid #333;
    }
       
    h2 {
        margin-top: 0;
    }
       
    .components {
        overflow: hidden; /* Clear floats */
        margin-bottom: 20px; /* Add margin between sections */
    }
       
    .image-text-container {
        display: flex; /* Use flexbox for layout */
    }
       
    .image-container {
        flex: 1; /* Make image container flex item */
        margin-right: 20px; /* Add margin between image and text */
    }
       
    .image-container img {
        width: 50%; /* Make the image width fill the container */
        height: auto; /* Automatically adjust height to maintain aspect ratio */
    }
       
    .text-container {
        flex: 2; /* Make text container flex item */
    }

    footer {
    
    text-align: center;
}

footer p {
    margin-bottom: 0px;
    padding: 25px 0px;
    color: black;
    font-size: 13px;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 0.5px;
}
       
       
       
    </style>
    
        
        
        
    </body>
    </html>
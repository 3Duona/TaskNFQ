<?php

use App\Controller\ViewController;
use PHPUnit\Framework\TestCase;

class ViewControllerTest extends TestCase
{
    public function testCalculateReadingTime()
    {
        $viewController = new ViewController();

        // Test with a short text
        $text = "This is a short text.";
        $this->assertEquals(1, $viewController->calculateReadingTime($text));

        // Test with a long text
        $text = "This milestone in quantum physics has been the result of decades of research and experimentation. Quantum entanglement is a phenomenon where two or more particles become inextricably linked, sharing their quantum states despite the distance between them. When one particle's state changes, the other particle's state changes instantaneously, even if they are separated by vast distances. This as Albert Einstein once called it, has been a source of intrigue and debate among scientists since its discovery.The recent experiment demonstrating long-distance quantum entanglement was conducted by an international team of researchers. They employed cutting-edge technology and innovative techniques to achieve this unprecedented feat, overcoming the challenges of maintaining entanglement over such a great distance. This accomplishment not only confirms the validity of quantum mechanics but also has significant implications for the development of quantum communication and teleportation technologies.
        One of the most promising applications of long-distance quantum entanglement is the potential for ultra-secure quantum communication networks. Unlike traditional communication methods, which can be intercepted and decoded by third parties, quantum communication is inherently secure. Any attempt to intercept a quantum communication would disrupt the entangled particles, alerting the sender and receiver of the intrusion. This level of security could revolutionize data transmission, enabling the development of unhackable networks that safeguard sensitive information from cyber threats.
        Another potential application of this breakthrough is the development of teleportation technology. While it may sound like science fiction, quantum teleportation has already been demonstrated in the laboratory over short distances. The process involves transmitting the quantum information of one particle to another, effectively teleporting the particle's state from one location to another. With the successful demonstration of long-distance quantum entanglement, scientists can now work on scaling up teleportation technology to cover greater distances, potentially revolutionizing the way we transport goods and people.
        Teleportation technology could have a significant impact on the logistics industry, dramatically reducing the time and cost associated with transporting goods across the globe. By eliminating the need for traditional shipping methods, teleportation could greatly reduce greenhouse gas emissions and alleviate the strain on infrastructure, such as roads and ports. This transformation could lead to more efficient supply chains, promoting economic growth and reducing the environmental impact of global trade.
        Space travel is another industry that could be transformed by the development of teleportation technology. Currently, space exploration is limited by the prohibitive costs and risks associated with launching spacecraft and the vast distances involved in interstellar travel. Teleportation could enable the transport of supplies, equipment, and even humans to distant locations in space instantaneously, removing these barriers and opening up new possibilities for space exploration and colonization.
        Of course, there are still many technical and theoretical challenges to overcome before teleportation becomes a reality. Scientists must work on improving the stability and efficiency of quantum entanglement over long distances, as well as developing methods to transmit larger amounts of quantum information. Additionally, ethical and legal considerations will need to be addressed as teleportation technology advances, including questions of personal privacy, intellectual property rights, and the potential for misuse.";
        $this->assertEquals(2, $viewController->calculateReadingTime($text));
    }
}
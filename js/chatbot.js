// Finowings Chatbot Widget
document.addEventListener("DOMContentLoaded", function () {
    
    // Configuration
    // Configuration
    const config = {
        appLink: "https://courses.finowings.com/auth/login",
        contactInfo: `
            📍 <b>Head Office:</b><br>
            C-1, Bank of Baroda, Sector-M,<br>
            Mama Chauraha, Kursi Road, Lucknow<br><br>
            📞 <a href="tel:+919708094321">+91-9708094321</a><br>
            📧 <a href="mailto:info@finowings.com">info@finowings.com</a><br>
            <i class="fab fa-whatsapp" style="color: #25D366; margin-right: 5px;"></i> <a href="https://wa.me/919708094321" target="_blank" aria-label="Join our WhatsApp community">Join Community</a>
        `,
        coursesInfo: `
            <b>Available Courses:</b><br><br>
            1. <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/136/0/recorded" target="_blank">25th Jan Technical Analysis</a><br>
            2. <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/139/0/recorded" target="_blank">10th Feb Technical Analysis</a><br>
            3. <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/19/0/recorded" target="_blank">Option Trading Master</a><br>
            4. <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/18/0/recorded" target="_blank">Fundamental Analysis</a><br>
            5. <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/17/0/recorded" target="_blank">Stock Market Crash Course</a><br>
            6. <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/16/0/recorded" target="_blank">Commodity Trading Master Class</a><br>
            7. <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/15/0/recorded" target="_blank">Smart Money Technical Analysis</a><br>
            8. <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/90/0/recorded" target="_blank">Secrets of Profitable Trading</a><br>
            9. <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/47/0/recorded" target="_blank">Price & Volume Contraction</a><br>
            10. <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/67/0/recorded" target="_blank">Learn Secrets of Profitable Trading</a><br>
            11. <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/49/0/recorded" target="_blank">Pyramid Strategy</a><br>
            12. <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/78/0/recorded" target="_blank">Nifty & Bank-Nifty 80% Strategy</a><br>
            13. <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/96/0/recorded" target="_blank">Timebomb Breakout Strategy</a><br>
            14. <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/27/0/recorded" target="_blank">Buildup Breakout Strategy</a><br>
            15. <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/103/0/recorded" target="_blank">BRAHMOS Intraday Strategy</a><br>
            16. <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/106/0/recorded" target="_blank">Fakeout Flip Trading Strategy</a><br>
            17. <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/109/0/recorded" target="_blank">Dhamakedar Intraday Strategy</a><br>
            18. <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/51/0/recorded" target="_blank">Breakout Huge Profit</a><br>
            19. <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/50/0/recorded" target="_blank">Support & Resistance Flip</a><br>
            20. <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/48/0/recorded" target="_blank">Advanced ORB Setup</a><br>
            21. <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/45/0/recorded" target="_blank">Gap Up & Gap Down Market</a><br>
            22. <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/30/0/recorded" target="_blank">Fair Value Gap Strategy</a><br>
            23. <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/29/0/recorded" target="_blank">The U-Turn Intraday Strategy</a><br>
            24. <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/28/0/recorded" target="_blank">Order Block Trading Strategy</a><br><br>
            <a href="https://courses.finowings.com/stock-market-courses" target="_blank"><b>View All Courses</b></a>
        `,
        priceInfo: `
            <b>Course Pricing:</b><br><br>
            - <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/136/0/recorded" target="_blank">Technical Analysis: ₹17,999</a><br>
            - <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/19/0/recorded" target="_blank">Option Trading: ₹4,999</a><br>
            - <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/18/0/recorded" target="_blank">Fundamental Analysis: ₹7,999</a><br>
            - <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/17/0/recorded" target="_blank">Stock Market Crash Course: ₹4,999</a><br>
            - <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/16/0/recorded" target="_blank">Commodity Trading: ₹1,999</a><br>
            - <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/15/0/recorded" target="_blank">Smart Money TA: ₹9,999</a><br>
            - <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/90/0/recorded" target="_blank">Secrets of Trading: ₹99</a><br><br>
            <a href="https://courses.finowings.com/stock-market-courses" target="_blank">Check Full Price List for All 20+ Courses</a>
        `
    };

    // Chatbot HTML (No Input Field)
    const chatbotHTML = `
        <div class="fw-chatbot-container" id="fwChatbot">
            <button class="fw-chat-toggle" id="fwChatToggle" aria-label="Open Finowings Support Chat" aria-expanded="false">
                <svg class="chat-icon" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H6l-2 2V4h16v12z"/>
                </svg>
                <div class="close-icon" style="display:none;" aria-hidden="true">&times;</div>
                <span class="fw-chat-badge" aria-label="1 new message">1</span>
            </button>
            
            <div class="fw-chat-window" id="fwChatWindow">
                <div class="fw-chat-header">
                    <div class="fw-chat-header-info">
                        <h4 class="fw-chat-header-title">Finowings Support</h4>
                    </div>
                    <button class="fw-chat-close" id="fwChatClose" aria-label="Close chat window">&times;</button>
                </div>
                
                <div class="fw-chat-messages" id="fwChatMessages"></div>
                
                <div class="fw-chat-options" id="fwChatOptions">
                    <!-- Options injected via JS -->
                </div>
            </div>
        </div>
    `;

    document.body.insertAdjacentHTML("beforeend", chatbotHTML);

    // Elements
    const chatToggle = document.getElementById("fwChatToggle");
    const chatWindow = document.getElementById("fwChatWindow");
    const chatClose = document.getElementById("fwChatClose");
    const chatMessages = document.getElementById("fwChatMessages");
    const chatOptions = document.getElementById("fwChatOptions");
    const chatBadge = document.querySelector(".fw-chat-badge");

    let isOpen = false;

    // Toggle Chat
    function toggleChat() {
        isOpen = !isOpen;
        chatWindow.classList.toggle("active", isOpen);
        chatToggle.classList.toggle("active", isOpen);
        chatToggle.setAttribute("aria-expanded", isOpen);
        
        if (isOpen) {
            chatBadge.style.display = "none";
            if (chatMessages.innerHTML === "") {
                addBotMessage("Hello! How can I help you today?");
                showOptions();
            }
        }
    }

    function addMessage(text, sender) {
        const messageDiv = document.createElement("div");
        messageDiv.className = `fw-message ${sender}`;
        messageDiv.innerHTML = `<div class="fw-message-content"><p class="fw-message-text">${text}</p></div>`;
        chatMessages.appendChild(messageDiv);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }

    function addBotMessage(text) {
        addMessage(text, 'bot');
    }

    function addUserMessage(text) {
        addMessage(text, 'user');
    }

    function showOptions() {
        chatOptions.innerHTML = ""; // Clear existing
        const buttons = [
            { text: "Course", action: "course" },
            { text: "Price", action: "price" },
            { text: "Contact", action: "contact" },
            { text: "Mutual Fund", action: "mutualfund" },
            { text: "Download App", action: "app" }
        ];

        buttons.forEach(btn => {
            const buttonElement = document.createElement("button");
            buttonElement.className = "fw-option-btn";
            buttonElement.innerText = btn.text;
            buttonElement.setAttribute("aria-label", btn.text);
            buttonElement.onclick = () => handleOptionClick(btn.action, btn.text);
            chatOptions.appendChild(buttonElement);
        });
    }

    function handleOptionClick(action, text) {
        if (action === "app") {
            window.open(config.appLink, "_blank");
            return;
        }

        if (action === "mutualfund") {
            window.open("https://wa.me/message/WUUCORGJ2ON7L1", "_blank", "noopener,noreferrer");
            addUserMessage(text);
            setTimeout(() => {
                addBotMessage("Great! I'm opening WhatsApp for you to connect about Mutual Funds. Click the link to get started! 💼");
            }, 500);
            return;
        }

        if (action === "community") {
            window.open("https://wa.me/919708094321", "_blank", "noopener,noreferrer");
            addUserMessage(text);
            setTimeout(() => {
                addBotMessage("Great! I'm opening WhatsApp for you to join our community. Click the link to connect with us! 🚀");
            }, 500);
            return;
        }

        addUserMessage(text);
        
        // Simulating typing delay
        setTimeout(() => {
            if (action === "course") {
                addBotMessage(config.coursesInfo);
            } else if (action === "price") {
                addBotMessage(config.priceInfo);
            } else if (action === "contact") {
                addBotMessage(config.contactInfo);
            }
        }, 500);
    }

    // Event Listeners
    document.body.addEventListener("click", function(event) {
        if (event.target.closest("#fwChatToggle") || event.target.closest("#fwChatClose")) {
            toggleChat();
        }
    });
});

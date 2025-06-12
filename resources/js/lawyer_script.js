// resources/js/lawyer_script.js

 const lawyers = [
  {
    name: "Rani Puspita Dewi, S.H., M.H.",
    type: "Pengacara Perdata",
    image: "/assets/images/Rani.png",
    rating: 4.9,
    experience: 9,
    alumniList: ["Universitas Indonesia, 2010", "Universitas Gadjah Mada, 2016"],
    location: "Jakarta, Indonesia",
    phone: "+62 812-3456-7890",
    license: "22.12345.PERADI.A",
    schedules: ["09:00 - 10:00", "10:00 - 11:00", "12:00", "09:00 - 10:00", "13:00 - 14:00"]
  },
  {
    name: "Budi Koestadi, S.H., M.H.",
    type: "Pengacara Pidana",
    image: "/assets/images/Budi.png",
    rating: 4.9,
    experience: 9,
    alumniList: ["Universitas Gadjah Mada, 2010"],
    location: "Yogyakarta, Indonesia",
    phone: "+62 812-1111-2222",
    license: "22.6789.456-PIDANA",
    schedules: ["10:00", "13:00", "15:00"]
  },
  {
    name: "Andi Darmawan, S.H., M.H.",
    type: "Pengacara Pidana",
    image: "/assets/images/Andi.png",
    rating: 4.9,
    experience: 10,
    alumniList: ["Universitas Indonesia, 2005", "Universitas Indonesia, 2017"],
    location: "Jakarta, Indonesia",
    phone: "+62 812-1111-2222",
    license: "22.6789.456-PIDANA",
    schedules: ["10:00", "13:00", "15:00"]
  },
  {
    name: "Maryo Sunandar, S.H., M.H.",
    type: "Pengacara Pidana",
    image: "/assets/images/Maryo.png",
    rating: 4.9,
    experience: 2,
    alumniList: ["Universitas ( unspecified ), Year"],
    location: "Yogyakarta, Indonesia",
    phone: "+62 812-1111-2222",
    license: "22.6789.456-PIDANA",
    schedules: ["10:00", "13:00", "15:00"]
  },
  {
    name: "Clarissa, S.H., M.H.",
    type: "Pengacara Pidana",
    image: "/assets/images/Clarissa.png",
    rating: 4.9,
    experience: 9,
    alumniList: ["Universitas Gadjah Mada, 2013"],
    location: "Yogyakarta, Indonesia",
    phone: "+62 812-1111-2222",
    license: "22.6789.456-PIDANA",
    schedules: ["10:00", "13:00", "15:00"]
  },
  {
    name: "Sitha Putri, S.H., M.H.",
    type: "Pengacara Pidana",
    image: "/assets/images/Sitha.png",
    rating: 4.9,
    experience: 9,
    alumniList: ["Universitas Gadjah Mada, 2014"],
    location: "Yogyakarta, Indonesia",
    phone: "+62 812-1111-2222",
    license: "22.6789.456-PIDANA",
    schedules: ["10:00", "13:00", "15:00"]
  },
  {
    name: "Farhat Abbas, S.H., M.H.",
    type: "Pengacara Pidana",
    image: "/assets/images/Farhat.png",
    rating: 4.9,
    experience: 9,
    alumniList: ["Universitas Gadjah Mada, 2016"],
    location: "Yogyakarta, Indonesia",
    phone: "+62 812-1111-2222",
    license: "22.6789.456-PIDANA",
    schedules: ["10:00", "13:00", "15:00"]
  },
  {
    name: "Hinca Panjaitan, S.H., M.H.",
    type: "Pengacara Pidana",
    image: "/assets/images/Hinca.png",
    rating: 4.9,
    experience: 9,
    alumniList: ["Universitas Gadjah Mada, 2017"],
    location: "Yogyakarta, Indonesia",
    phone: "+62 812-1111-2222",
    license: "22.6789.456-PIDANA",
    schedules: ["10:00", "13:00", "15:00"]
  },
];
window.lawyers = lawyers;

document.addEventListener("DOMContentLoaded", function (){
  const lawyerGrid = document.getElementById("lawyerGrid");
  const searchInput = document.getElementById("search");
  const modal = document.getElementById("lawyerModal");
  const modalContent = document.getElementById("modalContent");
  const closeModalBtn = document.getElementById("closeModal");
  
  function renderLawyers(data) {
    lawyerGrid.innerHTML = "";
    const left = document.createElement("div");
    const right = document.createElement("div");
    left.className = "column";
    right.className = "column";
  
    data.forEach((lawyer, index) => {
      const card = document.createElement("div");
      card.className = "lawyer-card";
      card.innerHTML = `
          <div class="card-content">
            <img src="${lawyer.image}" alt="${lawyer.name}" />
            <div class="card-text">
              <h3><strong>${lawyer.name}</strong></h3>
              <p class="specialty">${lawyer.type}</p>
              <div class="stars">⭐⭐⭐⭐⭐ <span>${lawyer.rating} ratings</span></div>
              <p class="experience">🗓️ ${lawyer.experience} years experience</p>
              <div class="actions">
                <button class="contact-btn">Contact Person</button>
                <button><a href="#" download class="download-btn">Download Portofolio ⬇️</a></button>
              </div>
            </div>
          </div>
        `;
  
      card.querySelector('.contact-btn').addEventListener('click', (e) => {
          e.stopPropagation();
          console.log('Contacting:', lawyer.name, lawyer.phone);
          alert(`Contact ${lawyer.name} at ${lawyer.phone}`);
      });
      card.querySelector('.download-btn').addEventListener('click', (e) => {
          e.stopPropagation();
          console.log('Downloading portfolio for:', lawyer.name);
          alert(`Portfolio for ${lawyer.name} would be downloaded.`);
      });
  
      card.addEventListener("click", () => openModal(lawyer));
  
      if (index % 2 === 0) {
        left.appendChild(card);
      } else {
        right.appendChild(card);
      }
    });
  
    lawyerGrid.appendChild(left);
    lawyerGrid.appendChild(right);
  }
  
  function openModal(lawyer) {
    const alumniHtml = lawyer.alumniList.map(item => `<span>${item}</span>`).join('<br>');
  
    const ratingStarsCount = Math.round(lawyer.rating);
    const starsVisualHtml = '⭐'.repeat(ratingStarsCount);
    const headerStarsVisualHtml = '⭐'.repeat(Math.floor(lawyer.rating));
  
    modalContent.innerHTML = `
      
      <div class="profile-detail">
        <div class="header">
          <img src="${lawyer.image}" alt="${lawyer.name}" class="profile-img" />
          <div class="header-info">
            <h3><strong>${lawyer.name}</strong></h3>
            <p class="specialty">${lawyer.type}</p>
            <div class="stars">${headerStarsVisualHtml} <span>${lawyer.rating} ratings</span></div>
            <p class="experience">🗓️ ${lawyer.experience} years experience</p>
            <div class="modal-actions">
              <button class="contact-person-modal">Contact Person</button>
              <button class="download-portfolio-modal"><a href="#" download>Download Portofolio ⬇️</a></button>
            </div>
          </div>
        </div>
  
        <div class="tab-section">
          <button class="tab active" data-tab="background">📄 Lawyer Background</button>
          <button class="tab" data-tab="ratings">⭐ Lawyer Ratings</button>
        </div>
  
        <div id="backgroundContent" class="tab-pane active">
          <div class="detail">
            <p><strong>Alumni</strong><br>${alumniHtml}</p>
            <p><strong>Wilayah</strong><br>${lawyer.location}</p>
            <p><strong>No. NIA</strong><br>${lawyer.license}</p>
          </div>
        </div>
  
        <div id="ratingsContent" class="tab-pane">
          <div class="detail">
            <p><strong>Detailed Ratings & Reviews</strong></p>
            <div class="ratings-tab-stars">${starsVisualHtml} <span>${lawyer.rating} ratings</span></div>
            <p><em>Expand for details</em></p>
          </div>
        </div>
  
        <div class="schedule">
          <strong>Jadwal Tersedia</strong>
          <div class="schedule-grid">
            ${lawyer.schedules.map(time => `<button class="schedule-btn">${time}</button>`).join(" ")}
          </div>
        </div>
      </div>
    `;
    modal.style.display = "flex";
  
    const tabButtons = modalContent.querySelectorAll(".tab");
    const tabPanes = modalContent.querySelectorAll(".tab-pane");
  
    tabButtons.forEach(button => {
      button.addEventListener("click", () => {
        tabButtons.forEach(btn => btn.classList.remove("active"));
        tabPanes.forEach(pane => pane.classList.remove("active"));
        button.classList.add("active");
        const targetPaneId = button.dataset.tab + "Content";
        const targetPane = modalContent.querySelector('#' + targetPaneId);
        if (targetPane) {
          targetPane.classList.add("active");
        } else {
          console.error("Target pane not found:", targetPaneId);
        }
      });
    });
  
    modalContent.querySelector('.contact-person-modal').addEventListener('click', () => {
      console.log('Contacting from modal:', lawyer.name, lawyer.phone);
      alert(`Contact ${lawyer.name} at ${lawyer.phone}`);
    });
  
    modalContent.querySelector('.download-portfolio-modal a').addEventListener('click', (e) => {
      console.log('Downloading portfolio from modal for:', lawyer.name);
      alert(`Portfolio for ${lawyer.name} will be downloaded.`);
    });
  }
  window.openModal = openModal;
  
  if (closeModalBtn) {
      closeModalBtn.addEventListener("click", () => {
        modal.style.display = "none";
      });
  }
  
  window.addEventListener('click', (event) => {
      if (event.target === modal) {
          modal.style.display = "none";
      }
  });
  
  searchInput.addEventListener("input", e => {
    const sanitizedValue = e.target.value.replace(/[^a-zA-Z\s]/g, '');
    e.target.value = sanitizedValue;
    const query = sanitizedValue.toLowerCase();
    const filtered = lawyers.filter(lawyer =>
      lawyer.name.toLowerCase().includes(query) ||
      lawyer.type.toLowerCase().includes(query) ||
      lawyer.location.toLowerCase().includes(query) ||
      (lawyer.alumniList && lawyer.alumniList.some(uni => uni.toLowerCase().includes(query)))
    );
    renderLawyers(filtered);
  });
  
  const urlParams = new URLSearchParams(window.location.search);
  const searchQueryFromUrl = urlParams.get('search');

  if (searchQueryFromUrl) {
      searchInput.value = searchQueryFromUrl;
      const filtered = lawyers.filter(lawyer =>
          lawyer.name.toLowerCase().includes(searchQueryFromUrl.toLowerCase()) ||
          lawyer.type.toLowerCase().includes(searchQueryFromUrl.toLowerCase()) ||
          lawyer.location.toLowerCase().includes(searchQueryFromUrl.toLowerCase()) ||
          (lawyer.alumniList && lawyer.alumniList.some(uni => uni.toLowerCase().includes(searchQueryFromUrl.toLowerCase())))
      );
      renderLawyers(filtered);
  } else {
      renderLawyers(lawyers);
  }
});

window.lawyers = lawyers;
window.openModal = openModal;

/**
 * @param {Array} data
 */
function renderLawyers(data) {
    const lawyerGrid = document.getElementById("lawyerGrid");
    if (!lawyerGrid) return;

    lawyerGrid.innerHTML = "";

    if (data.length === 0) {
        lawyerGrid.innerHTML = `<p class="text-customWhite text-center col-span-full">No lawyers found matching your search.</p>`;
        return;
    }

    data.forEach(lawyer => {
        // This is the card structure and style that you wanted
        const card = document.createElement("div");
        card.className = "cursor-pointer bg-customWhite p-3 rounded-[20px] shadow-lg text-gray-800 text-center transform hover:scale-105 transition-transform duration-300";
        card.onclick = () => openModal(lawyer); // Set the click event to open the modal
        
        // Populate the card's HTML with the lawyer's data
        card.innerHTML = `
            <img src="${lawyer.image}" alt="${lawyer.name}" class="w-full h-60 rounded-[17px] mx-auto mb-4 object-cover object-top">
            <h3 class="text-xl font-bold text-customBlue">${lawyer.name.split(",")[0]}</h3>
            <p class="text-customYellow font-semibold text-lg">★ ${lawyer.rating}</p>
        `;
        
        lawyerGrid.appendChild(card);
    });
}

/**
 * @param {object} lawyer
 */
function openModal(lawyer) {
    const modal = document.getElementById("detailModal") || document.getElementById("lawyerModal");
    const modalContent = document.getElementById("modalContent");
    if (!modal || !modalContent) return;

    const alumniHtml = lawyer.alumniList.map(item => `<span>${item}</span>`).join('<br>');
    const headerStarsVisualHtml = '⭐'.repeat(Math.floor(lawyer.rating));

    // This is your detailed modal HTML structure from the original file
    modalContent.innerHTML = `
      
      <div class="profile-detail">
        <div class="header">
          <img src="${lawyer.image}" alt="${lawyer.name}" class="profile-img" />
          <div class="header-info">
            <h3><strong>${lawyer.name}</strong></h3>
            <p class="specialty">${lawyer.type}</p>
            <div class="stars">${headerStarsVisualHtml} <span>${lawyer.rating} ratings</span></div>
            <p class="experience">🗓️ ${lawyer.experience} years experience</p>
            <div class="modal-actions">
              <button class="contact-person-modal">Contact Person</button>
              <button class="download-portfolio-modal"><a href="#" download>Download Portofolio ⬇️</a></button>
            </div>
          </div>
        </div>
  
        <div class="tab-section">
          <button class="tab active" data-tab="background">📄 Lawyer Background</button>
          <button class="tab" data-tab="ratings">⭐ Lawyer Ratings</button>
        </div>
  
        <div id="backgroundContent" class="tab-pane active">
          <div class="detail">
            <p><strong>Alumni</strong><br>${alumniHtml}</p>
            <p><strong>Wilayah</strong><br>${lawyer.location}</p>
            <p><strong>No. NIA</strong><br>${lawyer.license}</p>
          </div>
        </div>
  
        <div id="ratingsContent" class="tab-pane">
          <div class="detail">
            <p><strong>Detailed Ratings & Reviews</strong></p>
            <div class="ratings-tab-stars">${starsVisualHtml} <span>${lawyer.rating} ratings</span></div>
            <p><em>Expand for details</em></p>
          </div>
        </div>
  
        <div class="schedule">
          <strong>Jadwal Tersedia</strong>
          <div class="schedule-grid">
            ${lawyer.schedules.map(time => `<button class="schedule-btn">${time}</button>`).join(" ")}
          </div>
        </div>
      </div>
    `;
    modal.style.display = "flex";

    const tabButtons = modalContent.querySelectorAll(".tab");
    const tabPanes = modalContent.querySelectorAll(".tab-pane");

    tabButtons.forEach(button => {
      button.addEventListener("click", () => {
        tabButtons.forEach(btn => btn.classList.remove("active"));
        tabPanes.forEach(pane => pane.classList.remove("active"));
        button.classList.add("active");
        const targetPaneId = button.dataset.tab + "Content";
        const targetPane = modalContent.querySelector('#' + targetPaneId);
        if (targetPane) {
          targetPane.classList.add("active");
        } else {
          console.error("Target pane not found:", targetPaneId);
        }
      });
    });
  
    modalContent.querySelector('.contact-person-modal').addEventListener('click', () => {
      console.log('Contacting from modal:', lawyer.name, lawyer.phone);
      alert(`Contact ${lawyer.name} at ${lawyer.phone}`);
    });
  
    modalContent.querySelector('.download-portfolio-modal a').addEventListener('click', (e) => {
      console.log('Downloading portfolio from modal for:', lawyer.name);
      alert(`Portfolio for ${lawyer.name} will be downloaded.`);
    });
  window.openModal = openModal;
  }  
    modal.querySelectorAll(".tab").forEach(button => {
        button.addEventListener("click", () => {
            modal.querySelectorAll(".tab").forEach(btn => btn.classList.remove("active"));
            modal.querySelectorAll(".tab-pane").forEach(pane => pane.classList.remove("active"));
            button.classList.add("active");
            modal.querySelector('#' + button.dataset.tab + "Content").classList.add("active");
        });
    });

window.closeModal = function() {
    const modal = document.getElementById("detailModal") || document.getElementById("lawyerModal");
    if (modal) modal.style.display = "none";
}

document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById("search");
    const modal = document.getElementById("detailModal") || document.getElementById("lawyerModal");

    if (document.getElementById("lawyerGrid")) {

        const urlParams = new URLSearchParams(window.location.search);
        const searchQueryFromUrl = urlParams.get('search');
        
        let dataToRender = lawyers;

        if (searchQueryFromUrl) {
            if (searchInput) searchInput.value = searchQueryFromUrl;
            
            dataToRender = lawyers.filter(lawyer =>
                lawyer.name.toLowerCase().includes(searchQueryFromUrl.toLowerCase()) ||
                lawyer.type.toLowerCase().includes(searchQueryFromUrl.toLowerCase()) ||
                lawyer.location.toLowerCase().includes(searchQueryFromUrl.toLowerCase())
            );
        }
  
        renderLawyers(dataToRender);

        if (searchInput) {
            searchInput.addEventListener("input", e => {
              const sanitizedValue = e.target.value.replace(/[^a-zA-Z\s]/g, '');
              e.target.value = sanitizedValue;
              const query = sanitizedValue.toLowerCase();
              const filtered = lawyers.filter(lawyer =>
                lawyer.name.toLowerCase().includes(query) ||
                lawyer.type.toLowerCase().includes(query) ||
                lawyer.location.toLowerCase().includes(query) ||
                (lawyer.alumniList && lawyer.alumniList.some(uni => uni.toLowerCase().includes(query)))
              );
              renderLawyers(filtered);
            });
        }
    }

    if (modal) {
        window.addEventListener('click', (event) => {
            if (event.target === modal) {
                closeModal();
            }
        });
        const closeModalBtn = document.getElementById("closeModal");
        if(closeModalBtn) {
            closeModalBtn.addEventListener('click', closeModal);
        }
    }
});



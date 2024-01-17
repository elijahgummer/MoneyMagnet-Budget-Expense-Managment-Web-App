document.addEventListener("DOMContentLoaded", function () {
    // Get references to the modal and buttons
    const settingsModal = document.getElementById("settingsModal");
    const settingsModalBtn = document.getElementById("settingsModalBtn");
    const closeModalBtn = document.getElementById("closeModalBtn");

    settingsModalBtn.onclick = function() {
        settingsModal.style.display = "block";
      }

    // Function to close the modal
    closeModalBtn.addEventListener("click", () => {
        settingsModal.style.display = "none";
    });

    // Close the modal if the user clicks outside of it
    window.addEventListener("click", (event) => {
        if (event.target === settingsModal) {
            settingsModal.style.display = "none";
        }
    });
});

// Get references to modal and buttons
const modal = document.getElementById("budgetModal");
const openModalBtn = document.getElementById("openModalBtn");
const closeModalBtn = document.getElementById("closeModalBtn");
const cancelModalBtn = document.getElementById("cancelModalBtn");
const budgetForm = document.getElementById("budgetForm");

// Function to open the modal
function openModal() {
  modal.style.display = "block";
}

// Function to close the modal
function closeModal() {
  modal.style.display = "none";
}

// Event listeners
openModalBtn.addEventListener("click", openModal);
closeModalBtn.addEventListener("click", closeModal);
cancelModalBtn.addEventListener("click", closeModal);


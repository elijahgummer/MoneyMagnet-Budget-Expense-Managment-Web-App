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
// Handle form submission (you can add your own logic here)
budgetForm.addEventListener("submit", function (e) {
  e.preventDefault();
  // Get form values
  const category = document.getElementById("category").value;
  const budgetName = document.getElementById("budgetName").value;
  const budgetLimit = document.getElementById("budgetLimit").value;

  // You can process the form data here (e.g., send it to a server)
  // For now, let's log the values to the console
  console.log("Category:", category);
  console.log("Budget Name:", budgetName);
  console.log("Budget Limit:", budgetLimit);

  // Close the modal
  closeModal();
});

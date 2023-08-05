

const submissions = [
  { id: 1, name: "John Doe", email: "john@example.com", session: "45644354", date: "12/08/2023" },
  { id: 2, name: "Jane Smith", email: "jane@example.com", session: "45433543", date: "12/08/2023" },
  { id: 3, name: "Joshia Smith", email: "joshia@example.com", session: "45433553", date: "12/08/2023" },
  { id: 4, name: "Janet Smith", email: "janet@example.com", session: "45437543", date: "12/08/2023" },
  { id: 5, name: "Joseph Smith", email: "joseph@example.com", session: "45483543", date: "12/08/2023" },
  // Add more submissions...
];

const submissionTable = document.getElementById("submissionTable");

submissions.forEach(submission => {
  const row = submissionTable.insertRow();
  row.innerHTML = `
      <td>${submission.id}</td>
      <td>${submission.name}</td>
      <td>${submission.email}</td>
      <td>${submission.session}</td>
      <td>${submission.date}</td>
  `;
});

function get_feedback_submissions() {
 
}
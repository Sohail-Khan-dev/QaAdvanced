from fpdf import FPDF
from datetime import datetime

# Create a PDF document
pdf = FPDF()
pdf.add_page()
pdf.set_auto_page_break(auto=True, margin=15)

# Header
pdf.set_font("Arial", "B", 14)
pdf.cell(0, 10, "Sohail Khan", ln=True)
pdf.set_font("Arial", "", 12)
pdf.cell(0, 8, "Islamabad, Pakistan", ln=True)
pdf.cell(0, 8, "sohail8338@gmail.com | +92 302 5504938", ln=True)
pdf.cell(0, 8, "LinkedIn: linkedin.com/in/sohailshinwari/", ln=True)
pdf.ln(10)

# Date
today = datetime.today().strftime("%B %d, %Y")
pdf.cell(0, 8, today, ln=True)
pdf.ln(10)

# Body of the cover letter
body = """Dear Hiring Manager,

I am writing to express my interest in a Web Developer position within your organization. With over 1.5 years of experience in full stack development, I specialize in creating responsive, efficient, and scalable web applications using Laravel, HTML/CSS, JavaScript, Bootstrap, and Tailwind CSS.

In my recent role, I contributed to ERP and educational platforms, focusing on clean architecture, RESTful APIs, and user-focused UI design. I am passionate about writing maintainable code, solving real-world problems, and integrating emerging technologies into modern web stacks.

I am confident my technical skills and eagerness to contribute would make me a valuable asset to your development team. Thank you for considering my application.

Sincerely,
Sohail Khan
"""

pdf.multi_cell(0, 8, body)

# Save the PDF
file_path = "Sohail_Khan_Cover_Letter.pdf"
pdf.output(file_path)

file_path

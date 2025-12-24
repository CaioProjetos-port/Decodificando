import smtplib
from email.mime.text import MIMEText
from config import EMAIL_CREDENTIALS

def send_email(to_email, subject, content):
    msg = MIMEText(content, 'plain', 'utf-8')
    msg['Subject'] = subject
    msg['From'] = EMAIL_CREDENTIALS['username']
    msg['To'] = to_email

    with smtplib.SMTP(EMAIL_CREDENTIALS['smtp_server'], EMAIL_CREDENTIALS['smtp_port']) as server:
        server.starttls()
        server.login(EMAIL_CREDENTIALS['username'], EMAIL_CREDENTIALS['password'])
        server.send_message(msg)

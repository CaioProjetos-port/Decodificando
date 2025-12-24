import openai
from config import OPENAI_API_KEY

openai.api_key = OPENAI_API_KEY

def format_news(entry):
    prompt = f"Resuma a seguinte notícia em português:\n\nTítulo: {entry.title}\n\n{entry.summary}"
    response = openai.ChatCompletion.create(
        model='gpt-4',
        messages=[{'role': 'user', 'content': prompt}],
        max_tokens=300
    )
    return response['choices'][0]['message']['content']

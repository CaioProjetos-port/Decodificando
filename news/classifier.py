from config import KEYWORDS

def classify_news(news_data):
    classified = {genre: [] for genre in KEYWORDS}
    for site, entries in news_data.items():
        for entry in entries:
            for genre, words in KEYWORDS.items():
                if any(word.lower() in entry.title.lower() for word in words):
                    classified[genre].append(entry)
    return classified

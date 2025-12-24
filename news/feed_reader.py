import feedparser
from config import FEEDS

def fetch_news():
    news_data = {}
    for site, url in FEEDS.items():
        parsed_feed = feedparser.parse(url)
        news_data[site] = parsed_feed.entries
    return news_data

from spotipy.oauth2 import SpotifyClientCredentials
import json
import spotipy
import pprint
import sys

if len(sys.argv) > 1:
    search_str = sys.argv[1]
else:
    search_str = 'Radiohead'

client_id = "98b88799d05c4a168ab881885bf1c5d9"
client_secret = "1e31ca5a614e4910b97e124c5ce4633a"

client_credentials_manager = SpotifyClientCredentials(client_id=client_id, client_secret=client_secret)
sp = spotipy.Spotify(client_credentials_manager=client_credentials_manager)

if len(sys.argv) > 1:
    urn = sys.argv[1]
else:
    urn = 'spotify:track:0Svkvt5I79wficMFgaqEQJ'

track = sp.track(urn)
pprint.pprint(track)

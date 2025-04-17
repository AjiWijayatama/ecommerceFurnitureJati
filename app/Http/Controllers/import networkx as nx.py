import networkx as nx
import matplotlib.pyplot as plt

G = nx.DiGraph()

# Menambahkan edge sesuai graf yang kita punya
edges = [
    ('A', 'B'),
    ('A', 'C'),
    ('B', 'D'),
    ('B', 'E'),
    ('C', 'F'),
    ('E', 'F')
]

G.add_edges_from(edges)

# Menentukan posisi node agar lebih rapi
pos = nx.spring_layout(G, seed=42)

# Menggambar graf
plt.figure(figsize=(8,6))
nx.draw(G, pos, with_labels=True, node_color='skyblue', node_size=1500, font_size=16, font_weight='bold', edge_color='gray')
nx.draw_networkx_edge_labels(G, pos, edge_labels={(u, v): f"{u}->{v}" for u, v in edges})
plt.title("Visualisasi Graf Arah", fontsize=18)
plt.show()
🔄 Catatan:
Kalau kamu ingin graf tidak berarah, ubah nx.DiGraph() menjadi nx.Graph().

Kamu bisa menyesuaikan warna, ukuran, atau menambahkan label bobot kalau graf berbobot.

Mau saya bantu visualisasi jalur hasil dari BFS/DFS juga di graf ini (misalnya highlight jalur A → B → E → F)?










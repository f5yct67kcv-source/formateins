import math
FILTER = '''<filter id="kopie" x="-5%" y="-5%" width="110%" height="110%">
 <feTurbulence type="fractalNoise" baseFrequency="1.1" numOctaves="2" seed="7" result="n"/>
 <feDisplacementMap in="SourceGraphic" in2="n" scale="1.1" xChannelSelector="R" yChannelSelector="G" result="d"/>
 <feTurbulence type="fractalNoise" baseFrequency="2.4" numOctaves="1" seed="11" result="k"/>
 <feColorMatrix in="k" type="matrix" values="0 0 0 0 0  0 0 0 0 0  0 0 0 0 0  0 0 0 -9 6.1" result="loch"/>
 <feComposite in="d" in2="loch" operator="in"/>
</filter>'''

def hobel(x, y, s, farbe):
    return f'''<g transform="translate({x},{y}) scale({s})" fill="{farbe}">
 <rect x="10" y="44" width="100" height="8" rx="1.5"/>
 <path d="M18,44 L30,33 L92,33 L102,44 Z"/>
 <ellipse cx="27" cy="27" rx="6" ry="8"/><rect x="24" y="30" width="6" height="5"/>
 <path d="M50,44 L64,13 L71,15 L59,44 Z"/>
 <path d="M78,33 C78,17 90,8 99,12 C104,14 103,21 98,21 C92,21 87,25 89,33 Z"/>
</g>'''

def logo_a():
    c = '#5a3a1e'
    return f'''<svg viewBox="0 0 420 300" xmlns="http://www.w3.org/2000/svg"><defs>{FILTER}</defs>
<g filter="url(#kopie)">
 <ellipse cx="210" cy="140" rx="190" ry="118" fill="none" stroke="{c}" stroke-width="7"/>
 <ellipse cx="210" cy="140" rx="178" ry="106" fill="none" stroke="{c}" stroke-width="2"/>
 {hobel(150, 42, 1.0, c)}
 <text x="210" y="138" text-anchor="middle" font-family="Liberation Serif" font-style="italic" font-size="38" fill="{c}">Schreinerei</text>
 <text x="210" y="186" text-anchor="middle" font-family="Liberation Serif" font-weight="bold" font-size="50" letter-spacing="6" fill="{c}">KULLY AG</text>
 <text x="210" y="220" text-anchor="middle" font-family="Liberation Serif" font-size="19" letter-spacing="2" fill="{c}">4612 Wangen b. Olten</text>
 <text x="210" y="290" text-anchor="middle" font-family="Liberation Sans" font-size="17" fill="{c}">Innenausbau · Küchen · Möbel nach Mass</text>
</g></svg>'''

def tanne(x, y, s, farbe):
    return f'''<g transform="translate({x},{y}) scale({s})" fill="{farbe}">
 <path d="M40,0 L62,28 L52,28 L70,52 L58,52 L78,80 L2,80 L22,52 L10,52 L28,28 L18,28 Z"/>
 <rect x="34" y="80" width="12" height="16"/>
</g>'''

def logo_b():
    c = '#2e5e2b'
    return f'''<svg viewBox="0 0 420 300" xmlns="http://www.w3.org/2000/svg"><defs>{FILTER}</defs>
<g filter="url(#kopie)">
 {tanne(30, 70, 1.45, c)}
 <text x="160" y="160" font-family="Yellowtail" font-size="104" fill="{c}">Kully</text>
 <rect x="160" y="182" width="232" height="5" fill="{c}"/>
 <text x="162" y="216" font-family="Liberation Sans" font-weight="bold" font-size="25" letter-spacing="1" fill="{c}">SCHREINEREI AG</text>
 <text x="162" y="244" font-family="Liberation Sans" font-size="16" fill="{c}">Wangen b. Olten</text>
</g></svg>'''

def logo_c():
    c = '#8b1e1e'
    cx, cy, r = 210, 150, 128
    # Saegeblatt
    pts = []
    n = 48
    for i in range(n):
        a1 = 2*math.pi*i/n; a2 = 2*math.pi*(i+0.62)/n
        pts.append(f'{cx+r*math.cos(a1):.1f},{cy+r*math.sin(a1):.1f}')
        pts.append(f'{cx+(r+12)*math.cos(a2):.1f},{cy+(r+12)*math.sin(a2):.1f}')
    zahn = ' '.join(pts)
    return f'''<svg viewBox="0 0 420 300" xmlns="http://www.w3.org/2000/svg"><defs>{FILTER}
 <path id="oben" d="M {cx-96},{cy} A 96,96 0 0 1 {cx+96},{cy}"/>
 <path id="unten" d="M {cx-108},{cy} A 108,108 0 0 0 {cx+108},{cy}"/></defs>
<g filter="url(#kopie)" transform="translate(0,0) scale(1)">
 <g transform="translate(210,150) scale(0.98) translate(-210,-150)">
 <polygon points="{zahn}" fill="{c}"/>
 <circle cx="{cx}" cy="{cy}" r="{r-6}" fill="#fff"/>
 <circle cx="{cx}" cy="{cy}" r="{r-14}" fill="none" stroke="{c}" stroke-width="3"/>
 <circle cx="{cx}" cy="{cy}" r="66" fill="none" stroke="{c}" stroke-width="3"/>
 <text font-family="Liberation Serif" font-weight="bold" font-size="25" letter-spacing="3" fill="{c}"><textPath href="#oben" startOffset="50%" text-anchor="middle">SCHREINEREI</textPath></text>
 <text font-family="Liberation Serif" font-weight="bold" font-size="19" letter-spacing="2" fill="{c}"><textPath href="#unten" startOffset="50%" text-anchor="middle">KULLY AG · WANGEN</textPath></text>
 <text x="{cx}" y="{cy+24}" text-anchor="middle" font-family="Liberation Serif" font-weight="bold" font-size="66" fill="{c}">WK</text>
 <text x="{cx-84}" y="{cy+7}" text-anchor="middle" font-family="Liberation Serif" font-size="20" fill="{c}">★</text>
 <text x="{cx+84}" y="{cy+7}" text-anchor="middle" font-family="Liberation Serif" font-size="20" fill="{c}">★</text>
 </g>
</g></svg>'''

for name, f in [('a', logo_a), ('b', logo_b), ('c', logo_c)]:
    open(f'logo-{name}.svg', 'w').write(f())

panel = lambda b, t, svg: f'<div class="p"><div class="b">{b}</div><div class="logo">{svg}</div><div class="t">{t}</div></div>'
html = f'''<!doctype html><meta charset="utf-8"><link rel="stylesheet" href="fonts/fonts.css">
<style>body{{margin:0;background:#fff;font-family:Inter,sans-serif;color:#1d1d1b}}
.k{{padding:34px 40px 10px}} .k h1{{font-size:26px;margin:0 0 4px;font-weight:600}} .k p{{margin:0;color:#666;font-size:16px}}
.w{{display:flex;gap:24px;padding:24px 40px 40px}} .p{{flex:1;background:#f3f0e8;border-radius:6px;padding:20px 22px 22px}}
.b{{font-weight:700;font-size:22px}} .logo svg{{width:100%;height:auto;display:block;margin:10px 0}}
.t{{font-size:15px;color:#444;line-height:1.4}}</style>
<div class="k"><h1>Schreinerei Kully AG · das Logo von 1994</h1><p>Vorher-Auftritt, Schritt 1.2. Wie vom Kopierer: leicht ausgefranst, eine Farbe.</p></div>
<div class="w">
{panel('A', 'Oval mit Hobel. Times kursiv und fett, Braun. So sahen viele Handwerkerlogos aus.', logo_a())}
{panel('B', 'Pinselschrift mit Tanne. Grün, Arial fett darunter. Etwas lauter, die Tanne passt mehr zum Förster als zum Schreiner.', logo_b())}
{panel('C', 'Stempel mit Sägeblatt. Initialen des Gründers, Rot. Wirkt wie ein Gütesiegel.', logo_c())}
</div>'''
open('logos.html', 'w').write(html)

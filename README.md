# TrimTag Extension

The **TrimTag** extension adds a custom `<trim>` tag to MediaWiki, which:
- Wraps or enhances paragraph content with semantic whitespace control
- Applies `<p class="trim-wrapper" data-trim="true">...</p>` when needed
- Automatically trims leading/trailing text nodes in JavaScript
- Uses CSS tokens to manage vertical rhythm and spacing

---

## 💡 What It Does

- If content is not already inside a `<p>`, it wraps it in one.
- If content **is** already in a `<p>`, it adds `data-trim="true"` to that tag.
- JavaScript then trims surrounding whitespace from inside the element.
- CSS applies adaptive margins depending on position (first, last, only, middle).

---

## 🧪 Usage Example

```wikitext
<trim>This is wrapped in a paragraph.</trim>
```

```wikitext
<trim><p>This already had a paragraph tag.</p></trim>
```

Both will result in:
```wikitext
<p class="trim-wrapper" data-trim="true">This is wrapped in a paragraph.</p>

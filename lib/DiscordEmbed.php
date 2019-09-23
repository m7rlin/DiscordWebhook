<?php

/**
 * Discord Embed is a part of DiscordWebhook library.
 */
final class DiscordEmbed
{
  protected $title;
  protected $type = "rich";
  protected $description;
  protected $url;
  protected $timestamp;
  protected $color;
  protected $footer;
  protected $image;
  protected $thumbnail;
  protected $video;
  protected $provider;
  protected $author;
  protected $fields;

  /**
   * Set the title and the url
   *
   * @param string $title
   * @param string $url
   * @return self|null
   */
  function setTitle(string $title, string $url = ""): self {
    $this->title = $title;
    $this->url = $url;

    return $this;
  }

  /**
   * Set description
   *
   * @param string $description
   * @return self
   */
  function setDescription(string $description): self {
    $this->description = $description;

    return $this;
  }
  /**
   * Set timestamp of the embed
   *
   * @param [type] $timestamp
   * @return self
   */
  function setTimestamp($timestamp): self {
    $this->timestamp = $timestamp;

    return $this;
  }
  /**
   * Set border color
   *
   * @param string $color
   * @return self
   */
  function setColor(string $color): self {
    $this->color = is_int($color) ? $color : hexdec($color);

    return $this;
  }
  /**
   * Set url
   *
   * @param string $url
   * @return self
   */
  function setUrl(string $url): self {
    $this->url = $url;

    return $this;
  }
  /**
   * Set footer
   *
   * @param string $text
   * @param string $icon_url
   * @return self
   */
  function setFooter(string $text, string $icon_url = ""): self {
    $this->footer = [
      "text" => $text,
      "icon_url" => $icon_url,
    ];

    return $this;
  }
  /**
   * Set image
   *
   * @param string $url
   * @return self
   */
  function setImage(string $url): self {
    $this->image = [
      "url" => $url,
    ];

    return $this;
  }
  /**
   * Set thumbnail
   *
   * @param string $url
   * @return self
   */
  function setThumbnail(string $url): self {
    $this->thumbnail = [
      "url" => $url,
    ];

    return $this;
  }
  /**
   * Set author
   *
   * @param string $name
   * @param string $url
   * @param string $icon_url
   * @return self
   */
  function setAuthor(string $name, string $url = "", string $icon_url = ""): self {
    $this->author = [
      "name" => $name,
      "url" => $url,
      "icon_url" => $icon_url,
    ];

    return $this;
  }
  /**
   * Set field
   *
   * @param string $name
   * @param string $value
   * @param boolean $inline
   * @return self
   */
  function setField(string $name, string $value = "", bool $inline = false): self {
    $this->fields[] = [
      'name' => $name,
      'value' => $value,
      'inline' => boolval($inline),
    ];

    return $this;
  }
  /**
   * Get fields as an array
   *
   * @return array
   */
  function toArray(): array {
    return [
      'title' => $this->title,
      'type' => $this->type,
      'description' => $this->description,
      'url' => $this->url,
      'color' => $this->color,
      'footer' => $this->footer,
      'image' => $this->image,
      'thumbnail' => $this->thumbnail,
      'timestamp' => $this->timestamp,
      'author' => $this->author,
      'fields' => $this->fields
    ];
  }


}
 ?>
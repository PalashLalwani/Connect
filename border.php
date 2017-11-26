package com.jeeva.chatclient;

import java.awt.Graphics;

public class Border extends java.awt.Canvas implements CommonSettings {
  int mode;
  int width;
  int height;
  int size;
  int bsize;
  java.awt.Dimension dim;
  
  public void DrawBottom(Graphics paramGraphics) { int i = sizewidth;
    int j = sizeheight;
    paramGraphics.setColor(chatclient.ColorMap[4]);
    paramGraphics.fillRect(0, 0, i, j);
    paramGraphics.setColor(java.awt.Color.white);
    paramGraphics.drawLine(1, 0, 1, j - 2);
    int k = i - (bsize + 4);
    paramGraphics.drawLine(bsize + 2, 1, k, 1);
    paramGraphics.fillRect(k, 0, 1, 1);
    paramGraphics.setColor(java.awt.Color.gray);
    paramGraphics.drawLine(bsize + 2, 0, bsize + 2, 0);
    paramGraphics.drawLine(1, bsize + 2, i - 2, bsize + 2);
    paramGraphics.drawLine(i - 2, 0, i - 2, j - 2);
    paramGraphics.setColor(chatclient.ColorMap[4]);
    paramGraphics.drawLine(1, bsize + 3, i - 1, bsize + 3);
    paramGraphics.drawLine(i - 1, 0, i - 1, j - 1);
  }
  
  Border(TapPanel paramTapPanel, ChatClient paramChatClient, BorderPanel paramBorderPanel, int paramInt1, int paramInt2)
  {
    Cframe = paramTapPanel;
    mode = paramInt1;
    size = paramInt2;
    chatclient = paramChatClient;
    parent = paramBorderPanel;
    bsize = 4;
    tabHeight = 22;
    if (paramInt1 == 1)
    {
      height = 38;
      width = paramInt2;
    }
    if (paramInt1 == 4)
    {
      height = (bsize + 4);
      width = paramInt2;
    }
    if ((paramInt1 == 2) || (paramInt1 == 3))
    {
      width = (bsize + 4);
      height = paramInt2;
    }
    if (paramInt1 == 5)
    {
      width = paramInt2;
      height = 8;
    }
    dim = new java.awt.Dimension(width, height);
    resize(dim);
    validate();
  }
  
  public void paint(Graphics paramGraphics)
  {
    if (mode == 1)
    {
      DrawTabs(paramGraphics);
      return;
    }
    if (mode == 2)
    {
      DrawVertical(paramGraphics);
      return;
    }
    if (mode == 3)
    {
      DrawVertical(paramGraphics);
      return;
    }
    if (mode == 4)
    {
      DrawBottom(paramGraphics);
      return;
    }
    
    DrawHorizontal(paramGraphics);
  }
  
  BorderPanel parent;
  TapPanel Cframe;
  java.awt.Color c1;
  
  public void DrawTab(Graphics paramGraphics, int paramInt1, int paramInt2, int paramInt3, int paramInt4, boolean paramBoolean, String paramString) { paramGraphics.setColor(chatclient.ColorMap[4]);
    paramGraphics.fillRect(paramInt1, paramInt2, paramInt3, paramInt4);
    paramGraphics.setColor(chatclient.ColorMap[4]);
    paramGraphics.drawLine(paramInt1, paramInt2, paramInt1 + paramInt3 - 2, paramInt2);
    paramGraphics.drawLine(paramInt1, paramInt2, paramInt1, paramInt2 + paramInt4 - 1);
    paramGraphics.setColor(java.awt.Color.gray);
    paramGraphics.drawLine(paramInt1 + paramInt3 - 2, paramInt2, paramInt1 + paramInt3 - 2, paramInt2 + paramInt4 - 1);
    paramGraphics.setColor(chatclient.ColorMap[0]);
    paramGraphics.drawLine(paramInt1 + paramInt3 - 1, paramInt2 + 1, paramInt1 + paramInt3 - 1, paramInt2 + paramInt4 - 1);
    paramGraphics.setColor(chatclient.ColorMap[7]);
    if (paramBoolean)
    {
      paramGraphics.drawString(paramString, paramInt1 + (75 - fontmetrics.stringWidth(paramString)) / 2, paramInt2 + 16);
      return;
    }
    
    paramGraphics.drawString(paramString, paramInt1 + (75 - fontmetrics.stringWidth(paramString)) / 2, paramInt2 + 16);
  }
  
  int tabHeight;
  ChatClient chatclient;
  java.awt.FontMetrics fontmetrics;
  public void setTab(int paramInt) {
    parent.curTab = paramInt;
    String str = (String)parent.cardNames.elementAt(paramInt);
    parent.cardLayout.show(parent.cardPanel, str);
    repaint();
  }
  
  public void DrawTop(Graphics paramGraphics)
  {
    int i = sizewidth;
    int j = sizeheight;
    paramGraphics.setColor(chatclient.ColorMap[0]);
    paramGraphics.fillRect(0, 0, sizewidth, sizeheight);
    paramGraphics.setColor(chatclient.ColorMap[0]);
    paramGraphics.drawLine(1, 1, 1, j + 1);
    paramGraphics.drawLine(1, 1, i - 3, 1);
    paramGraphics.setColor(chatclient.ColorMap[0]);
    paramGraphics.drawLine(0, 0, i, 0);
    paramGraphics.drawLine(0, 1, 0, j + 1);
    paramGraphics.fillRect(2, 2, bsize, j);
    paramGraphics.fillRect(bsize + 2, 2, i - bsize, bsize);
    paramGraphics.setColor(java.awt.Color.gray);
    paramGraphics.drawLine(bsize + 2, bsize + 3, i - (bsize + 2), bsize + 3);
    paramGraphics.drawLine(i - 2, 1, i - 2, j + 1);
    paramGraphics.setColor(chatclient.ColorMap[0]);
    paramGraphics.drawLine(bsize + 3, bsize + 4, i - (bsize + 3), bsize + 4);
    paramGraphics.drawLine(i - 1, 1, i - 1, j + 1);
  }
  
  public java.awt.Dimension minimumSize()
  {
    return dim;
  }
  
  public void update(Graphics paramGraphics)
  {
    paint(paramGraphics);
  }
  
  public void DrawVertical(Graphics paramGraphics)
  {
    int i = sizeheight;
    paramGraphics.setColor(chatclient.ColorMap[4]);
    paramGraphics.drawLine(0, 0, 0, i);
    paramGraphics.fillRect(2, 0, bsize, i);
    paramGraphics.setColor(chatclient.ColorMap[4]);
    paramGraphics.drawLine(1, 0, 1, i);
    paramGraphics.setColor(java.awt.Color.gray);
    paramGraphics.drawLine(bsize + 2, 0, bsize + 2, i);
    paramGraphics.setColor(chatclient.ColorMap[4]);
    paramGraphics.drawLine(bsize + 3, 0, bsize + 3, i);
  }
  
  public boolean mouseEnter(java.awt.Event paramEvent, int paramInt1, int paramInt2)
  {
    setCursor(new java.awt.Cursor(12));
    return true;
  }
  
  public boolean mouseExit(java.awt.Event paramEvent, int paramInt1, int paramInt2)
  {
    setCursor(new java.awt.Cursor(0));
    return true;
  }
  
  public boolean mouseDown(java.awt.Event paramEvent, int paramInt1, int paramInt2)
  {
    if (mode != 1)
      return true;
    for (int i = 0; i < parent.tabPos.size(); i++)
    {
      java.awt.Rectangle localRectangle = (java.awt.Rectangle)parent.tabPos.elementAt(i);
      if (localRectangle.inside(paramInt1, paramInt2)) {
        setTab(i);
      }
    }
    return true;
  }
  
  public java.awt.Dimension preferredSize()
  {
    return minimumSize();
  }
  
  public void DrawTabs(Graphics paramGraphics)
  {
    int i = sizewidth;
    int j = sizeheight;
    int k = j - (bsize + 4);
    
    paramGraphics.setColor(chatclient.ColorMap[0]);
    paramGraphics.fillRect(0, 0, i, j);
    paramGraphics.setFont(parent.textFont);
    fontmetrics = paramGraphics.getFontMetrics();
    fontmetrics.getHeight();
    int m = parent.xofs + 1;
    int n = 7;
    paramGraphics.setColor(chatclient.ColorMap[4]);
    paramGraphics.fillRect(0, k, i, j);
    paramGraphics.drawLine(0, k, 0, j + 1);
    paramGraphics.fillRect(2, k + 1, bsize, j);
    paramGraphics.fillRect(bsize + 2, k + 1, i - bsize, bsize);
    paramGraphics.setColor(chatclient.ColorMap[4]);
    paramGraphics.drawLine(1, k, 1, j + 1);
    paramGraphics.drawLine(1, k, i - 3, k);
    paramGraphics.setColor(java.awt.Color.gray);
    paramGraphics.drawLine(bsize + 2, k + bsize + 2, i - (bsize + 2), k + bsize + 2);
    paramGraphics.drawLine(i - 2, k, i - 2, j + 1);
    paramGraphics.setColor(chatclient.ColorMap[4]);
    paramGraphics.drawLine(bsize + 3, k + bsize + 3, i - (bsize + 3), k + bsize + 3);
    paramGraphics.drawLine(i - 1, k, i - 1, j + 1);
    parent.tabPos.removeAllElements();
    for (int i1 = 0; i1 < parent.tabNames.size(); i1++)
    {
      localObject = (String)parent.tabNames.elementAt(i1);
      java.awt.Rectangle localRectangle = new java.awt.Rectangle();
      int i2 = fontmetrics.stringWidth((String)localObject);
      x = m;
      y = (n + 1);
      width = 75;
      height = tabHeight;
      parent.tabPos.addElement(localRectangle);
      DrawTab(paramGraphics, x, y, width, height, false, (String)localObject);
      m += width;
    }
    
    Object localObject = (java.awt.Rectangle)parent.tabPos.elementAt(parent.curTab);
    DrawTab(paramGraphics, x, y - 4, width + 2, height + 5, true, (String)parent.tabNames.elementAt(parent.curTab));
  }
  
  public void DrawHorizontal(Graphics paramGraphics)
  {
    paramGraphics.setColor(chatclient.ColorMap[4]);
    paramGraphics.fillRect(0, 0, width, height);
    paramGraphics.setColor(chatclient.ColorMap[4]);
    int i = width - 8;
    paramGraphics.drawLine(0, 1, i, 1);
    paramGraphics.fillRect(i, 0, 1, 1);
    paramGraphics.setColor(chatclient.ColorMap[4]);
    paramGraphics.drawLine(6, 0, 6, 0);
    paramGraphics.drawLine(1, 6, width - 2, 6);
    paramGraphics.drawLine(width - 2, 0, width - 2, height - 2);
    paramGraphics.setColor(chatclient.ColorMap[4]);
    paramGraphics.drawLine(1, 7, width - 1, 7);
    paramGraphics.drawLine(width - 1, 0, width - 1, height - 1);
  }
}

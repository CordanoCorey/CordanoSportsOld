//
//  PlayerViewController.h
//  CordanoSports
//
//  Created by Corey Gelbaugh on 2/25/14.
//  Copyright (c) 2014 Corey Gelbaugh. All rights reserved.
//

#import <UIKit/UIKit.h>

@protocol PlayerViewControllerDelegate <NSObject>

@end

@interface PlayerViewController : UIViewController
    @property (nonatomic, strong) id <PlayerViewControllerDelegate> delegate;
@end

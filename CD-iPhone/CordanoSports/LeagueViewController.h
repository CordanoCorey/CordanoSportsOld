//
//  LeagueViewController.h
//  CordanoSports
//
//  Created by Corey Gelbaugh on 2/25/14.
//  Copyright (c) 2014 Corey Gelbaugh. All rights reserved.
//

#import <UIKit/UIKit.h>

@protocol LeagueViewControllerDelegate <NSObject>

@end

@interface LeagueViewController : UIViewController
    @property (nonatomic, strong) id <LeagueViewControllerDelegate> delegate;
@end
